<script>
    let foundCachedPages = false;
    const offlineListElement = document.getElementById('offline-list').querySelector('ul');
    caches.open('cache-sw-saalfeld-entdecken-20240416153134')
    .then(cache => {
      cache.keys().then(keys => {
        if(keys.length !== 0) {
          keys.forEach(key => {
            fetch(key.url)
              .then(res => {
                if(res.headers.get('Content-Type').includes('text/html')) {
                  if(!key.url.includes('offline') && !key.url.includes('startseite') && !key.url.includes('.css')) {
                    const text = document.createTextNode(key.url.replace('https://saalfeld-entdecken.de/', '').toUpperCase());
                    const anchor = document.createElement('a');
                    const li = document.createElement('li');
                    anchor.setAttribute('href', key.url);
                    anchor.appendChild(text);
                    li.appendChild(anchor);
                    offlineListElement.appendChild(li);
                  }
                }
              })
            if(key.url.includes('aktiv-in-saalfeld')) {
            }
          });
        } else {
          const text = document.createTextNode('Keine Seiten bisher besucht');
          offlineListElement.parentElement.appendChild(text);
        }
      });
    });
</script>
