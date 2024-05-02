if(document.querySelector('.pwa-install-button')) {
  const pwaInstallButton = document.querySelector('.pwa-install-button');
  window.addEventListener('beforeinstallprompt', function (event) {
    pwaInstallButton.style.display = "block";
    const beforePromptEvent = event;
    document.querySelector('.pwa-install-button').addEventListener('click', function(){
      beforePromptEvent.prompt();
    })
  })
}
