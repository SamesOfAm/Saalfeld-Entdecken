const VERSION = 'saalfeld-entdecken-20240416153134';
    const CACHE = 'cache-sw-' + VERSION;
    let startUrl = '\/';
    let offlinePage = 'https\u003A\/\/saalfeld\u002Dentdecken.de\/offline';

self.importScripts('\/bundles\/heimrichhannotcontaopwa\/js\/huh\u002Dpwa\u002Dserviceworker.js');

    let SW = new HuhPwaServiceWorker();
SW.offlinePage = offlinePage;
SW.debug = false;
SW.pageTitle = 'Saalfeld\u0020Entdecken';
SW.supportOfflineCaching = false;
SW.startUrl = startUrl;
SW.cache = CACHE;
SW.updateSubscriptionPath = '\/api\/notifications\/update\/2';

    SW.supportOfflineCaching = true;

SW.supportEncorePrecache = true;

self.addEventListener('install', function (event) {
    SW.log(event, 'Start install event');
    event.waitUntil(
      SW.installEvent(event)
        .then(self.skipWaiting())
        .then(() => {
            caches.open(CACHE).then(function(cache) {
                return cache.addAll([
                    'startseite',
                    'offline'
                ])
            }
          )
        })
    );
});

self.addEventListener('activate', function(event) {
    SW.log(event, 'Start activate event');

    event.waitUntil(
        caches.keys().then(function(cacheNames) {
            return Promise.all(
                cacheNames.map(function(cacheName) {
                    if (cacheName !== CACHE) {
                        SW.log(event, 'Deleting old cache:' + cacheName);
                        return caches.delete(cacheName);
                    }
                })
            );
        }).then(function() {
            SW.log(event, "Claiming clients for ServiceWorker " + VERSION);
            return self.clients.claim();
        })
    );
});

self.addEventListener('fetch', function(event) {
    SW.log(event, 'Fetch ' + event.request.url);

        if (event.request.method !== 'GET') {
            SW.log(event, 'POST requests are not handled by the service worker');
            return event.respondWith(fetch(event.request));
        }
        var url = new URL(event.request.url);

        // don't cache backend or dev routes
        if (url.pathname.match('^\/contao')
            || url.pathname.match('^\/_contao')
            || url.pathname.match('^\/app_dev.php')
            || url.pathname.match('^\/api')
        ) {
            SW.log(event, '[Serviceworker] Fetch: Stop (' + event.request.url + ')');
            return false;
        }
            event.respondWith(
        fetch(event.request)
        .then(function(responce) {
            let cacheCopy = responce.clone();
            caches.open(CACHE)
                .then(function (cache) {
                    cache.put(event.request, cacheCopy);
                })
                .then(function() {
                    SW.log(event, 'Added request to cache:' + event.request.url);
                });
            return responce;
        })
        .catch(function(error) {
            SW.log(event, 'Could not fetch resource, try to return from cache: ' + event.request.url)
            return SW.returnFromCache(event.request);
        })
    );
});

self.addEventListener('push', /** @param {PushEvent} event */ function(event) {
        let payload = event.data ? event.data.text() : false;
    if (false === payload)
    {
        SW.log(event, 'A push notification sent from ' + SW.pageTitle + ' without any content.');
        return;
    }
    SW.log(event, 'Push payload: ' + payload);
    payload = JSON.parse(payload);

    event.waitUntil(
        self.registration.showNotification(SW.notificationTitle(payload), payload)
    );
    });

self.addEventListener('pushsubscriptionchange', /** @param {PushSubscriptionChangeEvent} event */ function(event) {
    SW.log(event, 'Start event');
    event.waitUntil(SW.pushSubscriptionChangeEvent(event, self));
});

self.addEventListener('notificationclick', function(event) {
    SW.log(event, 'Start notification clicked event');
    if (event.notification.data.clickJumpTo !== undefined)
    {
        event.notification.close();
        event.waitUntil(
            clients.openWindow(event.notification.data.clickJumpTo)
        );
    }
});
