@extends('layouts.plantilla') 

@section('title')
    incoming
@endsection

@section('content')

<header class="bg-main-green py-3">
    <div class="columns-2">
        <div>
            <img class="w-[6rem] ml-20" src= "{{ asset('img/LogiStockIconWhite.png') }}" alt="">
        </div>

        <div class="relative float-right mr-20 mt-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="bi bi-person-circle stroke-cream-10 fill-cream" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
              </svg>
        </div>
    </div> 
  </header>

  <section>
  <div class="columns-2 mb-4">
            <h1 class="font-normal font-Poppins text-main-green text-4xl mt-6 ml-20">
              Entradas pendientes
            </h1>

        
            <button onclick="showModalAgregar()" class="text-white bg-main-green ml-[28rem] mt-12 px-4 py-1 rounded-lg font-Poppins">
                Agregar entrega
            </button>  
    </div>

    <div class="columns-2 flex">
  
        <div class="basis-1/6">
            <svg class="ml-20 mb-6" xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 90 90" fill="none">
                <circle cx="45" cy="45" r="45" fill="#26413C"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M35.3332 58.6643C35.3332 58.2223 35.5087 57.7985 35.8212 57.4859C36.1337 57.1734 36.5576 56.9979 36.9996 56.9979H66.9944C67.4364 56.9979 67.8602 57.1734 68.1728 57.4859C68.4853 57.7985 68.6608 58.2223 68.6608 58.6643C68.6608 59.1062 68.4853 59.5301 68.1728 59.8426C67.8602 60.1551 67.4364 60.3306 66.9944 60.3306H36.9996C36.5576 60.3306 36.1337 60.1551 35.8212 59.8426C35.5087 59.5301 35.3332 59.1062 35.3332 58.6643ZM35.3332 45.3332C35.3332 44.8912 35.5087 44.4674 35.8212 44.1549C36.1337 43.8424 36.5576 43.6668 36.9996 43.6668H66.9944C67.4364 43.6668 67.8602 43.8424 68.1728 44.1549C68.4853 44.4674 68.6608 44.8912 68.6608 45.3332C68.6608 45.7751 68.4853 46.199 68.1728 46.5115C67.8602 46.824 67.4364 46.9996 66.9944 46.9996H36.9996C36.5576 46.9996 36.1337 46.824 35.8212 46.5115C35.5087 46.199 35.3332 45.7751 35.3332 45.3332ZM35.3332 32.0021C35.3332 31.5602 35.5087 31.1363 35.8212 30.8238C36.1337 30.5113 36.5576 30.3357 36.9996 30.3357H66.9944C67.4364 30.3357 67.8602 30.5113 68.1728 30.8238C68.4853 31.1363 68.6608 31.5602 68.6608 32.0021C68.6608 32.4441 68.4853 32.8679 68.1728 33.1804C67.8602 33.4929 67.4364 33.6685 66.9944 33.6685H36.9996C36.5576 33.6685 36.1337 33.4929 35.8212 33.1804C35.5087 32.8679 35.3332 32.4441 35.3332 32.0021ZM31.5138 27.4896C31.669 27.6444 31.7921 27.8282 31.8761 28.0307C31.9601 28.2331 32.0034 28.4502 32.0034 28.6694C32.0034 28.8885 31.9601 29.1056 31.8761 29.308C31.7921 29.5105 31.669 29.6944 31.5138 29.8492L26.5147 34.8483C26.3599 35.0035 26.176 35.1266 25.9735 35.2106C25.7711 35.2946 25.5541 35.3379 25.3349 35.3379C25.1157 35.3379 24.8987 35.2946 24.6962 35.2106C24.4938 35.1266 24.3099 35.0035 24.1551 34.8483L22.4887 33.1819C22.3338 33.027 22.2109 32.8431 22.127 32.6406C22.0432 32.4382 22 32.2212 22 32.0021C22 31.783 22.0432 31.5661 22.127 31.3636C22.2109 31.1612 22.3338 30.9773 22.4887 30.8223C22.6436 30.6674 22.8276 30.5445 23.03 30.4606C23.2324 30.3768 23.4494 30.3336 23.6685 30.3336C23.8876 30.3336 24.1046 30.3768 24.307 30.4606C24.5094 30.5445 24.6934 30.6674 24.8483 30.8223L25.3349 31.3122L29.1542 27.4896C29.309 27.3344 29.4929 27.2113 29.6953 27.1272C29.8978 27.0432 30.1148 27 30.334 27C30.5532 27 30.7702 27.0432 30.9727 27.1272C31.1751 27.2113 31.359 27.3344 31.5138 27.4896ZM31.5138 40.8206C31.669 40.9754 31.7921 41.1593 31.8761 41.3618C31.9601 41.5642 32.0034 41.7812 32.0034 42.0004C32.0034 42.2196 31.9601 42.4366 31.8761 42.6391C31.7921 42.8415 31.669 43.0254 31.5138 43.1802L26.5147 48.1794C26.3599 48.3346 26.176 48.4577 25.9735 48.5417C25.7711 48.6257 25.5541 48.6689 25.3349 48.6689C25.1157 48.6689 24.8987 48.6257 24.6962 48.5417C24.4938 48.4577 24.3099 48.3346 24.1551 48.1794L22.4887 46.513C22.1758 46.2001 22 45.7757 22 45.3332C22 44.8907 22.1758 44.4663 22.4887 44.1534C22.8016 43.8405 23.226 43.6647 23.6685 43.6647C24.111 43.6647 24.5354 43.8405 24.8483 44.1534L25.3349 44.6433L29.1542 40.8206C29.309 40.6654 29.4929 40.5423 29.6953 40.4583C29.8978 40.3743 30.1148 40.3311 30.334 40.3311C30.5532 40.3311 30.7702 40.3743 30.9727 40.4583C31.1751 40.5423 31.359 40.6654 31.5138 40.8206ZM31.5138 54.1517C31.669 54.3065 31.7921 54.4904 31.8761 54.6928C31.9601 54.8953 32.0034 55.1123 32.0034 55.3315C32.0034 55.5507 31.9601 55.7677 31.8761 55.9702C31.7921 56.1726 31.669 56.3565 31.5138 56.5113L26.5147 61.5104C26.3599 61.6656 26.176 61.7887 25.9735 61.8727C25.7711 61.9568 25.5541 62 25.3349 62C25.1157 62 24.8987 61.9568 24.6962 61.8727C24.4938 61.7887 24.3099 61.6656 24.1551 61.5104L22.4887 59.8441C22.1758 59.5312 22 59.1068 22 58.6643C22 58.2217 22.1758 57.7974 22.4887 57.4845C22.8016 57.1716 23.226 56.9958 23.6685 56.9958C24.111 56.9958 24.5354 57.1716 24.8483 57.4845L25.3349 57.9744L29.1542 54.1517C29.309 53.9965 29.4929 53.8734 29.6953 53.7894C29.8978 53.7054 30.1148 53.6621 30.334 53.6621C30.5532 53.6621 30.7702 53.7054 30.9727 53.7894C31.1751 53.8734 31.359 53.9965 31.5138 54.1517Z" fill="white"/>
              </svg>

              <svg class="mb-6 ml-16" xmlns="http://www.w3.org/2000/svg" width="110" height="110" viewBox="0 0 120 120" fill="none">
                <circle cx="60" cy="60" r="60" fill="#717EC3"/>
                <path d="M60.1792 33.2381C59.7293 33.0578 59.2273 33.0578 58.7774 33.2381L36.2894 42.2325L45.3479 45.8537L68.5368 36.5804L60.1792 33.2381ZM73.6087 38.6114L50.4198 47.8847L59.4783 51.5058L82.6672 42.2325L73.6087 38.6114ZM85.855 45.0172L61.3624 54.8142V84.6651L85.855 74.8681V45.0172ZM57.5943 84.6689V54.8105L33.1016 45.0172V74.8718L57.5943 84.6689ZM57.3795 29.7375C58.7268 29.1987 60.2298 29.1987 61.5771 29.7375L88.4399 40.4841C88.7892 40.6241 89.0886 40.8654 89.2994 41.177C89.5103 41.4887 89.623 41.8563 89.6231 42.2325V74.8718C89.6227 75.6248 89.3966 76.3603 88.9742 76.9836C88.5517 77.6069 87.9522 78.0893 87.253 78.3686L60.1792 89.1982C59.7293 89.3784 59.2273 89.3784 58.7774 89.1982L31.7074 78.3686C31.0075 78.0899 30.4072 77.6077 29.984 76.9844C29.5609 76.3611 29.3343 75.6252 29.3335 74.8718V42.2325C29.3336 41.8563 29.4463 41.4887 29.6572 41.177C29.8681 40.8654 30.1674 40.6241 30.5167 40.4841L57.3795 29.7375Z" fill="white"/>
              </svg>

              <svg class="mb-6 ml-20" xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 90 90" fill="none">
                <circle cx="45" cy="45" r="45" fill="#26413C"/>
                <path d="M21 24.6071C21 24.1809 21.1693 23.7721 21.4707 23.4707C21.7721 23.1693 22.1809 23 22.6071 23H27.4286C27.7871 23.0001 28.1352 23.1201 28.4177 23.3408C28.7002 23.5615 28.9007 23.8704 28.9875 24.2182L30.2893 29.4286H67.6071C67.8513 29.4286 68.0922 29.4843 68.3116 29.5914C68.5309 29.6985 68.7231 29.8541 68.8733 30.0465C69.0236 30.2389 69.128 30.463 69.1788 30.7018C69.2295 30.9406 69.2251 31.1878 69.1661 31.4246L64.3446 50.7104C64.2579 51.0582 64.0573 51.367 63.7748 51.5878C63.4924 51.8085 63.1442 51.9285 62.7857 51.9286H33.8571C33.4986 51.9285 33.1505 51.8085 32.868 51.5878C32.5855 51.367 32.385 51.0582 32.2982 50.7104L26.175 26.2143H22.6071C22.1809 26.2143 21.7721 26.045 21.4707 25.7436C21.1693 25.4422 21 25.0334 21 24.6071ZM31.0929 32.6429L32.7 39.0714H37.0714V32.6429H31.0929ZM40.2857 32.6429V39.0714H46.7143V32.6429H40.2857ZM49.9286 32.6429V39.0714H56.3571V32.6429H49.9286ZM59.5714 32.6429V39.0714H63.9429L65.55 32.6429H59.5714ZM63.1393 42.2857H59.5714V48.7143H61.5321L63.1393 42.2857ZM56.3571 42.2857H49.9286V48.7143H56.3571V42.2857ZM46.7143 42.2857H40.2857V48.7143H46.7143V42.2857ZM37.0714 42.2857H33.5036L35.1107 48.7143H37.0714V42.2857ZM37.0714 58.3571C36.2189 58.3571 35.4014 58.6958 34.7986 59.2986C34.1958 59.9014 33.8571 60.7189 33.8571 61.5714C33.8571 62.4239 34.1958 63.2415 34.7986 63.8443C35.4014 64.4471 36.2189 64.7857 37.0714 64.7857C37.9239 64.7857 38.7415 64.4471 39.3443 63.8443C39.9471 63.2415 40.2857 62.4239 40.2857 61.5714C40.2857 60.7189 39.9471 59.9014 39.3443 59.2986C38.7415 58.6958 37.9239 58.3571 37.0714 58.3571ZM30.6429 61.5714C30.6429 59.8665 31.3202 58.2313 32.5257 57.0257C33.7313 55.8202 35.3665 55.1429 37.0714 55.1429C38.7764 55.1429 40.4115 55.8202 41.6171 57.0257C42.8227 58.2313 43.5 59.8665 43.5 61.5714C43.5 63.2764 42.8227 64.9115 41.6171 66.1171C40.4115 67.3227 38.7764 68 37.0714 68C35.3665 68 33.7313 67.3227 32.5257 66.1171C31.3202 64.9115 30.6429 63.2764 30.6429 61.5714ZM59.5714 58.3571C58.7189 58.3571 57.9014 58.6958 57.2986 59.2986C56.6958 59.9014 56.3571 60.7189 56.3571 61.5714C56.3571 62.4239 56.6958 63.2415 57.2986 63.8443C57.9014 64.4471 58.7189 64.7857 59.5714 64.7857C60.4239 64.7857 61.2415 64.4471 61.8443 63.8443C62.4471 63.2415 62.7857 62.4239 62.7857 61.5714C62.7857 60.7189 62.4471 59.9014 61.8443 59.2986C61.2415 58.6958 60.4239 58.3571 59.5714 58.3571ZM53.1429 61.5714C53.1429 59.8665 53.8202 58.2313 55.0257 57.0257C56.2313 55.8202 57.8665 55.1429 59.5714 55.1429C61.2764 55.1429 62.9115 55.8202 64.1171 57.0257C65.3227 58.2313 66 59.8665 66 61.5714C66 63.2764 65.3227 64.9115 64.1171 66.1171C62.9115 67.3227 61.2764 68 59.5714 68C57.8665 68 56.2313 67.3227 55.0257 66.1171C53.8202 64.9115 53.1429 63.2764 53.1429 61.5714Z" fill="white"/>
            </svg>



              <svg class="mb-6 ml-20" xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 90 90" fill="none">
                <circle cx="45" cy="45" r="45" fill="#26413C"/>
                <path d="M31.8569 55.1429C31.8569 54.2715 32.2031 53.4358 32.8193 52.8196C33.4355 52.2034 34.2712 51.8572 35.1426 51.8572C36.0141 51.8572 36.8498 52.2034 37.466 52.8196C38.0822 53.4358 38.4284 54.2715 38.4284 55.1429V58.4286C38.4284 59.3001 38.0822 60.1358 37.466 60.752C36.8498 61.3682 36.0141 61.7144 35.1426 61.7144C34.2712 61.7144 33.4355 61.3682 32.8193 60.752C32.2031 60.1358 31.8569 59.3001 31.8569 58.4286V55.1429ZM51.5712 42.0001C51.5712 41.1286 51.9174 40.2929 52.5336 39.6767C53.1498 39.0605 53.9855 38.7144 54.8569 38.7144C55.7284 38.7144 56.5641 39.0605 57.1803 39.6767C57.7965 40.2929 58.1426 41.1286 58.1426 42.0001V58.4286C58.1426 59.3001 57.7965 60.1358 57.1803 60.752C56.5641 61.3682 55.7284 61.7144 54.8569 61.7144C53.9855 61.7144 53.1498 61.3682 52.5336 60.752C51.9174 60.1358 51.5712 59.3001 51.5712 58.4286V42.0001ZM41.7141 48.5715C41.7141 47.7001 42.0602 46.8643 42.6764 46.2481C43.2926 45.632 44.1284 45.2858 44.9998 45.2858C45.8712 45.2858 46.707 45.632 47.3231 46.2481C47.9393 46.8643 48.2855 47.7001 48.2855 48.5715V58.4286C48.2855 59.3001 47.9393 60.1358 47.3231 60.752C46.707 61.3682 45.8712 61.7144 44.9998 61.7144C44.1284 61.7144 43.2926 61.3682 42.6764 60.752C42.0602 60.1358 41.7141 59.3001 41.7141 58.4286V48.5715Z" fill="white"/>
                <path d="M31.8571 23.9287H28.5714C26.8286 23.9287 25.1571 24.6211 23.9247 25.8534C22.6923 27.0858 22 28.7573 22 30.5001V65.0001C22 66.743 22.6923 68.4145 23.9247 69.6468C25.1571 70.8792 26.8286 71.5716 28.5714 71.5716H61.4286C63.1714 71.5716 64.8429 70.8792 66.0753 69.6468C67.3077 68.4145 68 66.743 68 65.0001V30.5001C68 28.7573 67.3077 27.0858 66.0753 25.8534C64.8429 24.6211 63.1714 23.9287 61.4286 23.9287H58.1429V27.2144H61.4286C62.3 27.2144 63.1357 27.5606 63.7519 28.1768C64.3681 28.793 64.7143 29.6287 64.7143 30.5001V65.0001C64.7143 65.8716 64.3681 66.7073 63.7519 67.3235C63.1357 67.9397 62.3 68.2859 61.4286 68.2859H28.5714C27.7 68.2859 26.8643 67.9397 26.2481 67.3235C25.6319 66.7073 25.2857 65.8716 25.2857 65.0001V30.5001C25.2857 29.6287 25.6319 28.793 26.2481 28.1768C26.8643 27.5606 27.7 27.2144 28.5714 27.2144H31.8571V23.9287Z" fill="white"/>
                <path d="M49.9288 22.2857C50.3645 22.2857 50.7824 22.4588 51.0905 22.7669C51.3986 23.075 51.5716 23.4929 51.5716 23.9286V27.2143C51.5716 27.65 51.3986 28.0679 51.0905 28.376C50.7824 28.6841 50.3645 28.8571 49.9288 28.8571H40.0716C39.6359 28.8571 39.2181 28.6841 38.91 28.376C38.6019 28.0679 38.4288 27.65 38.4288 27.2143V23.9286C38.4288 23.4929 38.6019 23.075 38.91 22.7669C39.2181 22.4588 39.6359 22.2857 40.0716 22.2857H49.9288ZM40.0716 19C38.7645 19 37.5109 19.5193 36.5866 20.4435C35.6623 21.3678 35.1431 22.6214 35.1431 23.9286V27.2143C35.1431 28.5214 35.6623 29.775 36.5866 30.6993C37.5109 31.6236 38.7645 32.1429 40.0716 32.1429H49.9288C51.2359 32.1429 52.4895 31.6236 53.4138 30.6993C54.3381 29.775 54.8574 28.5214 54.8574 27.2143V23.9286C54.8574 22.6214 54.3381 21.3678 53.4138 20.4435C52.4895 19.5193 51.2359 19 49.9288 19H40.0716Z" fill="white"/>
              </svg>

              <svg class="mb-6 ml-20" xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 90 90" fill="none">
                <circle cx="45" cy="45" r="45" fill="#26413C"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M30.9809 34.4083C29.7976 34.4083 28.8392 33.4208 29.0226 32.2542C30.1684 25.1667 35.5684 20 44.9392 20C54.3142 20 60.6351 25.6667 60.6351 33.3958C60.6351 38.9958 57.8642 42.9292 53.1767 45.7833C48.5934 48.5292 47.2851 50.4417 47.2851 54.1583V54.2833C47.2851 54.8359 47.0656 55.3658 46.6749 55.7565C46.2842 56.1472 45.7543 56.3667 45.2017 56.3667H41.9934C41.4445 56.3667 40.9177 56.1501 40.5276 55.7639C40.1375 55.3776 39.9156 54.8531 39.9101 54.3042L39.8976 53.4708C39.7184 48.3833 41.8851 45.1333 46.7517 42.1708C51.0434 39.5375 52.5726 37.4417 52.5726 33.7208C52.5726 29.6417 49.4142 26.6458 44.5476 26.6458C40.3434 26.6458 37.4226 28.85 36.4726 32.4875C36.1976 33.5458 35.3142 34.4083 34.2226 34.4083H30.9809ZM43.5684 70C46.1601 70 48.1309 68.025 48.1309 65.4583C48.1309 62.8833 46.1601 60.9083 43.5684 60.9083C41.0434 60.9083 39.0392 62.8833 39.0392 65.4542C39.0392 68.025 41.0434 70 43.5684 70Z" fill="white"/>
              </svg>
        </div>

        <div class="mt-10 grid grid-cols-2 gap-2 ">


        <div class="relative w-full h-32 bg-card-bg mr-4 rounded-lg flex items-center">
        <div class="w-2/55 h-full">
        <img src="/img/box.png" alt="Producto" class="h-full w-full object-cover rounded-l-lg transform scale-90">
    </div>
    <div class="ml-4 w-2/3 flex flex-col justify-center">
        <h2 class="text-lg font-semibold">Nombre del Producto</h2>
        <p class="text-sm font-semibold">Código del Producto</p>
    </div>
    <div class="ml-auto mb-8 mr-4 flex flex-col items-end">
        <div class="w-24 bg-white rounded-lg flex items-center justify-center h-[2rem] mt-5">
            <span class="text-sm">10 unidades</span>
        </div>
        <p class="mt-12 text-xs ">Ingreso: 12/09/2024</p>
    </div>
</div>

    <div class="relative w-full h-32 bg-card-bg mr-4 rounded-lg flex items-center">
    <div class="w-2/55 h-full">
        <img src="/img/box.png" alt="Producto" class="h-full w-full object-cover rounded-l-lg transform scale-90">
    </div>
    <div class="ml-4 w-2/3 flex flex-col justify-center">
        <h2 class="text-lg font-semibold">Nombre del Producto</h2>
        <p class="text-sm font-semibold">Código del Producto</p>
    </div>
    <div class="ml-auto mb-8 mr-4 flex flex-col items-end">
        <div class="w-24 bg-white rounded-lg flex items-center justify-center h-[2rem] mt-5">
            <span class="text-sm">10 unidades</span>
        </div>
        <p class="mt-12 text-xs">Ingreso: 12/09/2024</p>
    </div>
</div>

<div class="relative w-full h-32 bg-card-bg mr-4 rounded-lg flex items-center">
    <div class="w-2/55 h-full">
        <img src="/img/box.png" alt="Producto" class="h-full w-full object-cover rounded-l-lg transform scale-90">
    </div>
    <div class="ml-4 w-2/3 flex flex-col justify-center">
        <h2 class="text-lg font-semibold">Nombre del Producto</h2>
        <p class="text-sm font-semibold">Código del Producto</p>
    </div>
    <div class="ml-auto mb-8 mr-4 flex flex-col items-end">
        <div class="w-24 bg-white rounded-lg flex items-center justify-center h-[2rem] mt-5">
            <span class="text-sm">10 unidades</span>
        </div>
        <p class="mt-12 text-xs">Ingreso: 12/09/2024</p>
    </div>
</div>

<div class="relative w-full h-32 bg-card-bg mr-4 rounded-lg flex items-center">
    <div class="w-2/55 h-full">
        <img src="/img/box.png" alt="Producto" class="h-full w-full object-cover rounded-l-lg transform scale-90">
    </div>
    <div class="ml-4 w-2/3 flex flex-col justify-center">
        <h2 class="text-lg font-semibold">Nombre del Producto</h2>
        <p class="text-sm font-semibold">Código del Producto</p>
    </div>
    <div class="ml-auto mb-8 mr-4 flex flex-col items-end">
        <div class="w-24 bg-white rounded-lg flex items-center justify-center h-[2rem] mt-5">
            <span class="text-sm">10 unidades</span>
        </div>
        <p class="mt-12 text-xs">Ingreso: 12/09/2024</p>
    </div>
</div>
<div class="relative w-full h-32 bg-card-bg mr-4 rounded-lg flex items-center">
    <div class="w-2/55 h-full">
        <img src="/img/box.png" alt="Producto" class="h-full w-full object-cover rounded-l-lg transform scale-90">
    </div>
    <div class="ml-4 w-2/3 flex flex-col justify-center">
        <h2 class="text-lg font-semibold">Nombre del Producto</h2>
        <p class="text-sm font-semibold">Código del Producto</p>
    </div>
    <div class="ml-auto mb-8 mr-4 flex flex-col items-end">
        <div class="w-24 bg-white rounded-lg flex items-center justify-center h-[2rem] mt-5">
            <span class="text-sm">10 unidades</span>
        </div>
        <p class="mt-12 text-xs ">Ingreso: 12/09/2024</p>
    </div>
</div>

<div class="relative w-full h-32 bg-card-bg mr-4 rounded-lg flex items-center">
    <div class="w-2/55 h-full">
        <img src="/img/box.png" alt="Producto" class="h-full w-full object-cover rounded-l-lg transform scale-90">
    </div>
    <div class="ml-4 w-2/3 flex flex-col justify-center">
        <h2 class="text-lg font-semibold">Nombre del Producto</h2>
        <p class="text-sm font-semibold ">Código del Producto</p>
    </div>
    <div class="ml-auto mb-8 mr-4 flex flex-col items-end">
        <div class="w-24 bg-white rounded-lg flex items-center justify-center h-[2rem] mt-5">
            <span class="text-sm">10 unidades</span>
        </div>
        <p class="mt-12 text-xs ">Ingreso: 12/09/2024</p>
    </div>
</div>


</div>
    </div>

    <div id="modalAgregar" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
  <div class="bg-card-bg w-[90%] p-12 rounded-lg shadow-lg relative">
    <h2 class="text-xl font-semibold mb-8 text-center">Agregar entrega</h2>
    
    <!-- Formulario dentro del modal -->
    <div class="grid grid-cols-2 gap-4">
      <!-- Primera columna -->
      <div>
        <label class="block mb-4 font-semibold">Nombre del producto</label>
        <input type="text" class="w-full   mb-4 rounded-lg bg-gray-300">
        
        <label class="block mb-4 font-semibold">Código del producto</label>
        <input type="text" class="w-full   mb-4 rounded-lg bg-gray-300">
        
        <label class="block mb-4 font-semibold">Descripción del producto</label>
        <textarea class="w-full  mb-4 rounded-lg bg-gray-300"></textarea>
        
        <label class="block mb-4 font-semibold">Cantidad del producto</label>
        <input type="number" class="w-full  mb-4 rounded-lg bg-gray-300">
      </div>
      
      <!-- Segunda columna -->
      <div>
        <label class="block mb-4 font-semibold">Marca del producto</label>
        <input type="text" class="w-full  mb-4 rounded-lg bg-gray-300">
        
        <label class="block mb-4 font-semibold">Proveedor</label>
        <input type="text" class="w-full   mb-4rounded-lg bg-gray-300">
        
        <label class="block mb-4 font-semibold">Contacto del proveedor</label>
        <input type="text" class="w-full  mb-4rounded-lg bg-gray-300">
        
        <label class="block mb-4 font-semibold">Fecha de entrada del producto</label>
        <input type="date" class="w-full   mb-4 rounded-lg bg-gray-300">
      </div>
    </div>
    
    <!-- Espacio para subir imagen -->
    <div class="mt-8">
      <label class="block mb-4 font-semibold">Subir imagen del producto</label>
      <input type="file" class="w-full p-3 rounded-lg bg-gray-300">
    </div>
    
    <!-- Botones -->
    <div class="flex justify-center mt-8">
      <button class="text-white bg-main-green px-6 py-2 rounded-lg font-Poppins mr-4" onclick="guardarEntrega()">
        Guardar entrega
      </button>
      <button class="text-white bg-main-green px-6 py-2 rounded-lg font-Poppins" onclick="closeModal()">
        Volver
      </button>
    </div>
  </div>
</div>

        
</section>


<script>
  function showModalAgregar() {
    document.getElementById('modalAgregar').classList.remove('hidden');
  }

  function closeModal() {
    document.getElementById('modalAgregar').classList.add('hidden');
  }

  function guardarEntrega() {
    closeModal();
    // Lógica para guardar la entrega
  }
</script>

@endsection