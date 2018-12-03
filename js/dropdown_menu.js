function menu() {
    document.getElementsByClassName('menu_dropdown')[0].classList.toggle('down');
    document.getElementsByClassName('arrow')[0].classList.toggle('gone');
    if (document.getElementsByClassName('menu_dropdown')[0].classList.contains('down')) {
      setTimeout(function() {
        document.getElementsByClassName('menu_dropdown')[0].style.overflow = 'visible'
      }, 500)
    } else {
      document.getElementsByClassName('menu_dropdown')[0].style.overflow = 'hidden'
    }
  }