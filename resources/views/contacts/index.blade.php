@extends('layouts.main')

@section('page.title', 'Контакти Шкварка-Shop')

@section('main.content')

<h1 style="font-weight: bold; color: black">Контакти</h1>
   <div>
      <p style="font-size: 20px; color: black;padding-top: 20px; padding-bottom: 10px;">Щоб сформувати замовлення, зв'яжіться з нами за вказаними контактами</p>
   </div>
<div class="contact-container">

   <div class="contact-info">
      <p><i class="bi bi-telephone-fill" style="font-size: 20px;"></i>
         Телефонуйте за номером:</p>
         <p><strong>+48 784 407 399</strong></p>
      <p><a href="viber://add?number=48784407399"> <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0,0,256,256">
         <g transform=""><g fill="#000000" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M38.4,256c-21.20773,0 -38.4,-17.19227 -38.4,-38.4v-179.2c0,-21.20773 17.19227,-38.4 38.4,-38.4h179.2c21.20773,0 38.4,17.19227 38.4,38.4v179.2c0,21.20773 -17.19227,38.4 -38.4,38.4z" id="shape"></path></g><g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8.53333,8.53333)"><path d="M25.362,8.32c-0.409,-1.459 -1.218,-2.614 -2.405,-3.431c-1.498,-1.032 -3.221,-1.398 -4.709,-1.62c-2.059,-0.307 -3.924,-0.35 -5.7,-0.133c-1.666,0.204 -2.92,0.53 -4.065,1.056c-2.243,1.03 -3.589,2.698 -4,4.956c-0.2,1.096 -0.334,2.087 -0.412,3.032c-0.18,2.185 -0.017,4.119 0.499,5.911c0.502,1.747 1.38,2.996 2.684,3.816c0.333,0.209 0.757,0.36 1.169,0.506c0.206,0.073 0.404,0.145 0.577,0.221v3.53c0,0.462 0.374,0.836 0.836,0.836v0c0.218,0 0.427,-0.085 0.583,-0.237l3.257,-3.168c0.142,-0.162 0.142,-0.162 0.288,-0.165c1.113,-0.022 2.25,-0.065 3.38,-0.126c1.369,-0.075 2.955,-0.207 4.449,-0.83c1.367,-0.571 2.365,-1.477 2.964,-2.692c0.625,-1.268 0.997,-2.642 1.136,-4.199c0.244,-2.738 0.07,-5.114 -0.531,-7.263zM19.691,18.74c-0.327,0.535 -0.817,0.905 -1.393,1.145c-0.421,0.176 -0.851,0.139 -1.266,-0.037c-3.484,-1.474 -6.215,-3.798 -8.021,-7.137c-0.372,-0.688 -0.631,-1.437 -0.928,-2.164c-0.061,-0.15 -0.056,-0.325 -0.083,-0.488c0.026,-1.175 0.927,-1.836 1.837,-2.036c0.348,-0.077 0.656,0.046 0.914,0.293c0.714,0.682 1.279,1.472 1.704,2.358c0.186,0.389 0.102,0.733 -0.215,1.022c-0.065,0.06 -0.134,0.116 -0.205,0.169c-0.723,0.544 -0.829,0.955 -0.444,1.774c0.656,1.393 1.745,2.328 3.154,2.908c0.371,0.153 0.721,0.077 1.005,-0.224c0.038,-0.04 0.081,-0.079 0.109,-0.125c0.556,-0.927 1.361,-0.835 2.105,-0.306c0.489,0.347 0.963,0.713 1.447,1.067c0.734,0.541 0.728,1.049 0.28,1.781zM15.511,9.143c-0.187,0 -0.375,0.015 -0.559,0.046c-0.312,0.053 -0.606,-0.158 -0.658,-0.47c-0.052,-0.311 0.158,-0.606 0.47,-0.658c0.245,-0.04 0.497,-0.061 0.747,-0.061c2.475,0 4.489,2.014 4.489,4.489c0,0.251 -0.021,0.503 -0.062,0.748c-0.047,0.279 -0.289,0.477 -0.563,0.477c-0.031,0 -0.063,-0.002 -0.095,-0.008c-0.311,-0.053 -0.521,-0.347 -0.469,-0.658c0.031,-0.182 0.046,-0.37 0.046,-0.558c0,-1.846 -1.501,-3.347 -3.346,-3.347zM18,12.857c0,0.315 -0.256,0.571 -0.571,0.571c-0.315,0 -0.571,-0.256 -0.571,-0.571c0,-0.945 -0.769,-1.714 -1.714,-1.714c-0.315,0 -0.571,-0.256 -0.571,-0.571c0,-0.315 0.256,-0.571 0.571,-0.571c1.574,-0.001 2.856,1.281 2.856,2.856zM21.846,13.554c-0.06,0.266 -0.295,0.445 -0.557,0.445c-0.042,0 -0.085,-0.005 -0.127,-0.014c-0.308,-0.07 -0.501,-0.376 -0.431,-0.683c0.083,-0.365 0.125,-0.742 0.125,-1.12c0,-2.778 -2.26,-5.039 -5.039,-5.039c-0.379,0 -0.755,0.042 -1.12,0.125c-0.306,0.071 -0.614,-0.123 -0.683,-0.431c-0.07,-0.308 0.123,-0.614 0.431,-0.683c0.448,-0.103 0.91,-0.154 1.374,-0.154c3.408,0 6.181,2.773 6.181,6.181c0,0.464 -0.052,0.926 -0.154,1.373z"></path></g></g></g>
         </svg></a>
         Пишіть в Viber за номером:</p>
         <p><strong>+48 784 407 399</strong></p>
      <p> <a href="viber://add?number=48784407399">Додати контакт Viber</a></p>
      <h4 style="padding-bottom: 10px; padding-top: 20px;">Приєднуйтеся до наших соцмереж:</h4>
      <p><a href="https://invite.viber.com/?g2=AQA%252BX%252FYmIPo%252FWFIUCT6BD2Cs8ELJiF8AAFjVNzgO%252FXvORthtW0%252FKeka59Xggc3y6">
         <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0,0,256,256">
            <g transform=""><g fill="#000000" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M38.4,256c-21.20773,0 -38.4,-17.19227 -38.4,-38.4v-179.2c0,-21.20773 17.19227,-38.4 38.4,-38.4h179.2c21.20773,0 38.4,17.19227 38.4,38.4v179.2c0,21.20773 -17.19227,38.4 -38.4,38.4z" id="shape"></path></g><g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8.53333,8.53333)"><path d="M25.362,8.32c-0.409,-1.459 -1.218,-2.614 -2.405,-3.431c-1.498,-1.032 -3.221,-1.398 -4.709,-1.62c-2.059,-0.307 -3.924,-0.35 -5.7,-0.133c-1.666,0.204 -2.92,0.53 -4.065,1.056c-2.243,1.03 -3.589,2.698 -4,4.956c-0.2,1.096 -0.334,2.087 -0.412,3.032c-0.18,2.185 -0.017,4.119 0.499,5.911c0.502,1.747 1.38,2.996 2.684,3.816c0.333,0.209 0.757,0.36 1.169,0.506c0.206,0.073 0.404,0.145 0.577,0.221v3.53c0,0.462 0.374,0.836 0.836,0.836v0c0.218,0 0.427,-0.085 0.583,-0.237l3.257,-3.168c0.142,-0.162 0.142,-0.162 0.288,-0.165c1.113,-0.022 2.25,-0.065 3.38,-0.126c1.369,-0.075 2.955,-0.207 4.449,-0.83c1.367,-0.571 2.365,-1.477 2.964,-2.692c0.625,-1.268 0.997,-2.642 1.136,-4.199c0.244,-2.738 0.07,-5.114 -0.531,-7.263zM19.691,18.74c-0.327,0.535 -0.817,0.905 -1.393,1.145c-0.421,0.176 -0.851,0.139 -1.266,-0.037c-3.484,-1.474 -6.215,-3.798 -8.021,-7.137c-0.372,-0.688 -0.631,-1.437 -0.928,-2.164c-0.061,-0.15 -0.056,-0.325 -0.083,-0.488c0.026,-1.175 0.927,-1.836 1.837,-2.036c0.348,-0.077 0.656,0.046 0.914,0.293c0.714,0.682 1.279,1.472 1.704,2.358c0.186,0.389 0.102,0.733 -0.215,1.022c-0.065,0.06 -0.134,0.116 -0.205,0.169c-0.723,0.544 -0.829,0.955 -0.444,1.774c0.656,1.393 1.745,2.328 3.154,2.908c0.371,0.153 0.721,0.077 1.005,-0.224c0.038,-0.04 0.081,-0.079 0.109,-0.125c0.556,-0.927 1.361,-0.835 2.105,-0.306c0.489,0.347 0.963,0.713 1.447,1.067c0.734,0.541 0.728,1.049 0.28,1.781zM15.511,9.143c-0.187,0 -0.375,0.015 -0.559,0.046c-0.312,0.053 -0.606,-0.158 -0.658,-0.47c-0.052,-0.311 0.158,-0.606 0.47,-0.658c0.245,-0.04 0.497,-0.061 0.747,-0.061c2.475,0 4.489,2.014 4.489,4.489c0,0.251 -0.021,0.503 -0.062,0.748c-0.047,0.279 -0.289,0.477 -0.563,0.477c-0.031,0 -0.063,-0.002 -0.095,-0.008c-0.311,-0.053 -0.521,-0.347 -0.469,-0.658c0.031,-0.182 0.046,-0.37 0.046,-0.558c0,-1.846 -1.501,-3.347 -3.346,-3.347zM18,12.857c0,0.315 -0.256,0.571 -0.571,0.571c-0.315,0 -0.571,-0.256 -0.571,-0.571c0,-0.945 -0.769,-1.714 -1.714,-1.714c-0.315,0 -0.571,-0.256 -0.571,-0.571c0,-0.315 0.256,-0.571 0.571,-0.571c1.574,-0.001 2.856,1.281 2.856,2.856zM21.846,13.554c-0.06,0.266 -0.295,0.445 -0.557,0.445c-0.042,0 -0.085,-0.005 -0.127,-0.014c-0.308,-0.07 -0.501,-0.376 -0.431,-0.683c0.083,-0.365 0.125,-0.742 0.125,-1.12c0,-2.778 -2.26,-5.039 -5.039,-5.039c-0.379,0 -0.755,0.042 -1.12,0.125c-0.306,0.071 -0.614,-0.123 -0.683,-0.431c-0.07,-0.308 0.123,-0.614 0.431,-0.683c0.448,-0.103 0.91,-0.154 1.374,-0.154c3.408,0 6.181,2.773 6.181,6.181c0,0.464 -0.052,0.926 -0.154,1.373z"></path></g></g></g>
            </svg></a> 
         <strong>Viber:</strong> Доєднатися до розмови.
         <a href="https://invite.viber.com/?g2=AQA%252BX%252FYmIPo%252FWFIUCT6BD2Cs8ELJiF8AAFjVNzgO%252FXvORthtW0%252FKeka59Xggc3y6">
            Приєднатися до групи</a>
      </p>
      <p><a href="https://www.facebook.com/groups/482577181100489"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="30" viewBox="0,0,256,256">
         <g fill="#000000" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M38.4,256c-21.20773,0 -38.4,-17.19227 -38.4,-38.4v-179.2c0,-21.20773 17.19227,-38.4 38.4,-38.4h179.2c21.20773,0 38.4,17.19227 38.4,38.4v179.2c0,21.20773 -17.19227,38.4 -38.4,38.4z" id="shape"></path></g><g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8.53333,8.53333)"><path d="M15,3c-6.627,0 -12,5.373 -12,12c0,6.016 4.432,10.984 10.206,11.852v-8.672h-2.969v-3.154h2.969v-2.099c0,-3.475 1.693,-5 4.581,-5c1.383,0 2.115,0.103 2.461,0.149v2.753h-1.97c-1.226,0 -1.654,1.163 -1.654,2.473v1.724h3.593l-0.487,3.154h-3.106v8.697c5.857,-0.794 10.376,-5.802 10.376,-11.877c0,-6.627 -5.373,-12 -12,-12z"></path></g></g>
         </svg></a>    
         <strong>Facebook: </strong> Стежте за нами на Facebook.
         <a href="https://www.facebook.com/groups/482577181100489">Приєднатися до групи</a>
      </p>
      <p><a href="https://www.instagram.com/shkvarka_shop/"> <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0,0,256,256">
         <g fill="#000000" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M38.4,256c-21.20773,0 -38.4,-17.19227 -38.4,-38.4v-179.2c0,-21.20773 17.19227,-38.4 38.4,-38.4h179.2c21.20773,0 38.4,17.19227 38.4,38.4v179.2c0,21.20773 -17.19227,38.4 -38.4,38.4z" id="shape"></path></g><g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M8,3c-2.757,0 -5,2.243 -5,5v8c0,2.757 2.243,5 5,5h8c2.757,0 5,-2.243 5,-5v-8c0,-2.757 -2.243,-5 -5,-5zM8,5h8c1.654,0 3,1.346 3,3v8c0,1.654 -1.346,3 -3,3h-8c-1.654,0 -3,-1.346 -3,-3v-8c0,-1.654 1.346,-3 3,-3zM17,6c-0.55228,0 -1,0.44772 -1,1c0,0.55228 0.44772,1 1,1c0.55228,0 1,-0.44772 1,-1c0,-0.55228 -0.44772,-1 -1,-1zM12,7c-2.757,0 -5,2.243 -5,5c0,2.757 2.243,5 5,5c2.757,0 5,-2.243 5,-5c0,-2.757 -2.243,-5 -5,-5zM12,9c1.654,0 3,1.346 3,3c0,1.654 -1.346,3 -3,3c-1.654,0 -3,-1.346 -3,-3c0,-1.654 1.346,-3 3,-3z"></path></g></g>
         </svg></a> 
        
         <strong>Instagram:  @</strong>shkvarka_shop - слідкуйте за нашими дописами та історіями. <a href="https://www.instagram.com/shkvarka_shop/"> Перейти до профілю</a>
      </p>


    </div>

    

    <div class="contact-info">
      <h4> <i class="bi bi-clock-fill" style="font-size: 20px;"></i> Наш графік роботи:</h4>
      <p>Онлайн: Пд-Нд 9:00 - 21:00</p>
      <p>Особисто: Нд</p>
      <p><i class="bi bi-geo-alt-fill" style="font-size: 20px;"></i>   Wałbrzyska 48</p>
   </div>
  
</div>

<div class="map-container" style="width: 100%; padding-top: 0px;">
   <a href='http://maps-generator.com/uk' style="color: white;">.</a>
   <iframe width="100" height="100" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=750&amp;height=470&amp;hl=en&amp;q=walbryska%2048%20Warsaw+(%D0%A2%D0%95%D0%A1%D0%A2)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
   <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=3d2fe2593a454320fd7824b801a975d30bca268a'></script>
</div>

@endsection
