@extends('layouts.plantilla')

@section('title')
    Sales
@endsection

@section('content')
<!-- --------------HEADER-------------- -->
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
<!-- --------------HEADER-------------- -->

<!-- --------------BODY-------------- -->
<section>
    <div class="columns-2 mb-4">
            <h1 class="font-normal font-Poppins text-main-green text-4xl mt-6 ml-20">
              Salidas
            </h1>

        
            <button onclick="showModalAgregar()" class="text-white bg-main-green ml-[29rem] mt-12 px-4 py-1 rounded-lg font-Poppins">
                Agregar reserva
            </button>  
    </div>

    <div class="columns-2 flex">
  
        <div class="basis-1/6">
            <svg class="ml-20 mb-6" xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 90 90" fill="none">
                <circle cx="45" cy="45" r="45" fill="#26413C"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M35.3332 58.6643C35.3332 58.2223 35.5087 57.7985 35.8212 57.4859C36.1337 57.1734 36.5576 56.9979 36.9996 56.9979H66.9944C67.4364 56.9979 67.8602 57.1734 68.1728 57.4859C68.4853 57.7985 68.6608 58.2223 68.6608 58.6643C68.6608 59.1062 68.4853 59.5301 68.1728 59.8426C67.8602 60.1551 67.4364 60.3306 66.9944 60.3306H36.9996C36.5576 60.3306 36.1337 60.1551 35.8212 59.8426C35.5087 59.5301 35.3332 59.1062 35.3332 58.6643ZM35.3332 45.3332C35.3332 44.8912 35.5087 44.4674 35.8212 44.1549C36.1337 43.8424 36.5576 43.6668 36.9996 43.6668H66.9944C67.4364 43.6668 67.8602 43.8424 68.1728 44.1549C68.4853 44.4674 68.6608 44.8912 68.6608 45.3332C68.6608 45.7751 68.4853 46.199 68.1728 46.5115C67.8602 46.824 67.4364 46.9996 66.9944 46.9996H36.9996C36.5576 46.9996 36.1337 46.824 35.8212 46.5115C35.5087 46.199 35.3332 45.7751 35.3332 45.3332ZM35.3332 32.0021C35.3332 31.5602 35.5087 31.1363 35.8212 30.8238C36.1337 30.5113 36.5576 30.3357 36.9996 30.3357H66.9944C67.4364 30.3357 67.8602 30.5113 68.1728 30.8238C68.4853 31.1363 68.6608 31.5602 68.6608 32.0021C68.6608 32.4441 68.4853 32.8679 68.1728 33.1804C67.8602 33.4929 67.4364 33.6685 66.9944 33.6685H36.9996C36.5576 33.6685 36.1337 33.4929 35.8212 33.1804C35.5087 32.8679 35.3332 32.4441 35.3332 32.0021ZM31.5138 27.4896C31.669 27.6444 31.7921 27.8282 31.8761 28.0307C31.9601 28.2331 32.0034 28.4502 32.0034 28.6694C32.0034 28.8885 31.9601 29.1056 31.8761 29.308C31.7921 29.5105 31.669 29.6944 31.5138 29.8492L26.5147 34.8483C26.3599 35.0035 26.176 35.1266 25.9735 35.2106C25.7711 35.2946 25.5541 35.3379 25.3349 35.3379C25.1157 35.3379 24.8987 35.2946 24.6962 35.2106C24.4938 35.1266 24.3099 35.0035 24.1551 34.8483L22.4887 33.1819C22.3338 33.027 22.2109 32.8431 22.127 32.6406C22.0432 32.4382 22 32.2212 22 32.0021C22 31.783 22.0432 31.5661 22.127 31.3636C22.2109 31.1612 22.3338 30.9773 22.4887 30.8223C22.6436 30.6674 22.8276 30.5445 23.03 30.4606C23.2324 30.3768 23.4494 30.3336 23.6685 30.3336C23.8876 30.3336 24.1046 30.3768 24.307 30.4606C24.5094 30.5445 24.6934 30.6674 24.8483 30.8223L25.3349 31.3122L29.1542 27.4896C29.309 27.3344 29.4929 27.2113 29.6953 27.1272C29.8978 27.0432 30.1148 27 30.334 27C30.5532 27 30.7702 27.0432 30.9727 27.1272C31.1751 27.2113 31.359 27.3344 31.5138 27.4896ZM31.5138 40.8206C31.669 40.9754 31.7921 41.1593 31.8761 41.3618C31.9601 41.5642 32.0034 41.7812 32.0034 42.0004C32.0034 42.2196 31.9601 42.4366 31.8761 42.6391C31.7921 42.8415 31.669 43.0254 31.5138 43.1802L26.5147 48.1794C26.3599 48.3346 26.176 48.4577 25.9735 48.5417C25.7711 48.6257 25.5541 48.6689 25.3349 48.6689C25.1157 48.6689 24.8987 48.6257 24.6962 48.5417C24.4938 48.4577 24.3099 48.3346 24.1551 48.1794L22.4887 46.513C22.1758 46.2001 22 45.7757 22 45.3332C22 44.8907 22.1758 44.4663 22.4887 44.1534C22.8016 43.8405 23.226 43.6647 23.6685 43.6647C24.111 43.6647 24.5354 43.8405 24.8483 44.1534L25.3349 44.6433L29.1542 40.8206C29.309 40.6654 29.4929 40.5423 29.6953 40.4583C29.8978 40.3743 30.1148 40.3311 30.334 40.3311C30.5532 40.3311 30.7702 40.3743 30.9727 40.4583C31.1751 40.5423 31.359 40.6654 31.5138 40.8206ZM31.5138 54.1517C31.669 54.3065 31.7921 54.4904 31.8761 54.6928C31.9601 54.8953 32.0034 55.1123 32.0034 55.3315C32.0034 55.5507 31.9601 55.7677 31.8761 55.9702C31.7921 56.1726 31.669 56.3565 31.5138 56.5113L26.5147 61.5104C26.3599 61.6656 26.176 61.7887 25.9735 61.8727C25.7711 61.9568 25.5541 62 25.3349 62C25.1157 62 24.8987 61.9568 24.6962 61.8727C24.4938 61.7887 24.3099 61.6656 24.1551 61.5104L22.4887 59.8441C22.1758 59.5312 22 59.1068 22 58.6643C22 58.2217 22.1758 57.7974 22.4887 57.4845C22.8016 57.1716 23.226 56.9958 23.6685 56.9958C24.111 56.9958 24.5354 57.1716 24.8483 57.4845L25.3349 57.9744L29.1542 54.1517C29.309 53.9965 29.4929 53.8734 29.6953 53.7894C29.8978 53.7054 30.1148 53.6621 30.334 53.6621C30.5532 53.6621 30.7702 53.7054 30.9727 53.7894C31.1751 53.8734 31.359 53.9965 31.5138 54.1517Z" fill="white"/>
              </svg>

              <svg class="mb-6 ml-20" xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 90 90" fill="none">
                <circle cx="45" cy="45" r="45" fill="#26413C"/>
                <path d="M45.1343 24.9285C44.7969 24.7933 44.4204 24.7933 44.083 24.9285L27.2169 31.6744L34.0108 34.3902L51.4025 27.4353L45.1343 24.9285ZM55.2064 28.9585L37.8147 35.9135L44.6086 38.6293L62.0003 31.6744L55.2064 28.9585ZM64.3912 33.7628L46.0217 41.1106V63.4988L64.3912 56.151V33.7628ZM43.1956 63.5016V41.1078L24.8261 33.7628V56.1538L43.1956 63.5016ZM43.0345 22.3031C44.045 21.899 45.1722 21.899 46.1827 22.3031L66.3298 30.3631C66.5918 30.468 66.8163 30.649 66.9744 30.8828C67.1326 31.1165 67.2172 31.3922 67.2172 31.6744V56.1538C67.2169 56.7186 67.0473 57.2702 66.7305 57.7377C66.4137 58.2051 65.964 58.5669 65.4396 58.7764L45.1343 66.8986C44.7969 67.0338 44.4204 67.0338 44.083 66.8986L23.7804 58.7764C23.2555 58.5674 22.8053 58.2058 22.4879 57.7383C22.1705 57.2708 22.0006 56.7189 22 56.1538V31.6744C22.0001 31.3922 22.0846 31.1165 22.2428 30.8828C22.4009 30.649 22.6254 30.468 22.8874 30.3631L43.0345 22.3031Z" fill="white"/>
              </svg>

              <svg class="mb-6 ml-16" xmlns="http://www.w3.org/2000/svg" width="110" height="110" viewBox="0 0 120 120" fill="none">
                <g clip-path="url(#clip0_128_521)">
                  <circle cx="60" cy="60" r="60" fill="#717EC3"/>
                  <path d="M28 32.8096C28 32.2413 28.2258 31.6962 28.6276 31.2944C29.0295 30.8925 29.5745 30.6667 30.1429 30.6667H36.5714C37.0494 30.6669 37.5136 30.8268 37.8903 31.1211C38.2669 31.4155 38.5343 31.8273 38.65 32.291L40.3857 39.2382H90.1429C90.4684 39.2383 90.7896 39.3125 91.0821 39.4553C91.3746 39.598 91.6307 39.8055 91.8311 40.0621C92.0314 40.3186 92.1707 40.6174 92.2384 40.9358C92.306 41.2542 92.3002 41.5838 92.2214 41.8996L85.7929 67.6139C85.6772 68.0777 85.4098 68.4895 85.0331 68.7838C84.6565 69.0781 84.1923 69.238 83.7143 69.2382H45.1429C44.6649 69.238 44.2006 69.0781 43.824 68.7838C43.4474 68.4895 43.18 68.0777 43.0643 67.6139L34.9 34.9525H30.1429C29.5745 34.9525 29.0295 34.7267 28.6276 34.3248C28.2258 33.923 28 33.3779 28 32.8096ZM41.4571 43.5239L43.6 52.0953H49.4286V43.5239H41.4571ZM53.7143 43.5239V52.0953H62.2857V43.5239H53.7143ZM66.5714 43.5239V52.0953H75.1429V43.5239H66.5714ZM79.4286 43.5239V52.0953H85.2571L87.4 43.5239H79.4286ZM84.1857 56.381H79.4286V64.9525H82.0429L84.1857 56.381ZM75.1429 56.381H66.5714V64.9525H75.1429V56.381ZM62.2857 56.381H53.7143V64.9525H62.2857V56.381ZM49.4286 56.381H44.6714L46.8143 64.9525H49.4286V56.381ZM49.4286 77.8096C48.2919 77.8096 47.2018 78.2611 46.3981 79.0649C45.5944 79.8686 45.1429 80.9587 45.1429 82.0953C45.1429 83.232 45.5944 84.322 46.3981 85.1258C47.2018 85.9295 48.2919 86.381 49.4286 86.381C50.5652 86.381 51.6553 85.9295 52.459 85.1258C53.2628 84.322 53.7143 83.232 53.7143 82.0953C53.7143 80.9587 53.2628 79.8686 52.459 79.0649C51.6553 78.2611 50.5652 77.8096 49.4286 77.8096ZM40.8571 82.0953C40.8571 79.822 41.7602 77.6419 43.3677 76.0344C44.9751 74.4269 47.1553 73.5239 49.4286 73.5239C51.7019 73.5239 53.882 74.4269 55.4895 76.0344C57.0969 77.6419 58 79.822 58 82.0953C58 84.3686 57.0969 86.5488 55.4895 88.1562C53.882 89.7637 51.7019 90.6667 49.4286 90.6667C47.1553 90.6667 44.9751 89.7637 43.3677 88.1562C41.7602 86.5488 40.8571 84.3686 40.8571 82.0953ZM79.4286 77.8096C78.2919 77.8096 77.2018 78.2611 76.3981 79.0649C75.5944 79.8686 75.1429 80.9587 75.1429 82.0953C75.1429 83.232 75.5944 84.322 76.3981 85.1258C77.2018 85.9295 78.2919 86.381 79.4286 86.381C80.5652 86.381 81.6553 85.9295 82.459 85.1258C83.2628 84.322 83.7143 83.232 83.7143 82.0953C83.7143 80.9587 83.2628 79.8686 82.459 79.0649C81.6553 78.2611 80.5652 77.8096 79.4286 77.8096ZM70.8571 82.0953C70.8571 79.822 71.7602 77.6419 73.3677 76.0344C74.9751 74.4269 77.1553 73.5239 79.4286 73.5239C81.7019 73.5239 83.882 74.4269 85.4895 76.0344C87.0969 77.6419 88 79.822 88 82.0953C88 84.3686 87.0969 86.5488 85.4895 88.1562C83.882 89.7637 81.7019 90.6667 79.4286 90.6667C77.1553 90.6667 74.9751 89.7637 73.3677 88.1562C71.7602 86.5488 70.8571 84.3686 70.8571 82.0953Z" fill="white"/>
                </g>
                <defs>
                  <clipPath id="clip0_128_521">
                    <rect width="120" height="120" fill="white"/>
                  </clipPath>
                </defs>
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
  
        <div class="basis-5/6 flex flex-wrap mt-2">
          <!-- card 1 -->
          <div class="w-[45%] h-60 bg-card-bg mr-4 rounded-lg">
            <div class="ml-4 mt-[20px] mr-3">
              <!-- info cliente -->
                <div class="border-b-2 border-dotted border-main-green columns-2 m-1">

                    <div class="font-Poppins text-secondary-green mt-2">
                      <h3>ENTREGADO</h3>
                    </div>

                    <div class="font-Coda text-main-green text-right mr-2">
                      <p class="m-0">Cliente: Juanito Cruz</p>
                      <p class="m-0">Fecha: 03/09/24</p>
                    </div>

                </div>
              <!-- productos -->
              <div class="flex-auto ml-1 box-border h-16 grid grid-cols-3 gap-2 mr-4 mt-3 text-secondary-green ">

                <div class="flex border border-black h-12">
                    <div class="flex flex-col ml-2 mt-1">

                      <p class="font-Coda text-xs m-0">nombre producto</p>
                      <p class="font-Coda text-xs m-0">codigo producto</p>
                    </div>

                    <div class="flex ml-6 mt-[0.45rem]">
                      <p class="font-Poppins font-extrabold text-secondary-green text-2xl">23</p>   
                    </div>

                </div>
              
                <div class="flex border border-black h-12">

                    <div class="flex flex-col ml-2 mt-1">
                      <p class="font-Coda text-xs m-0">nombre producto</p>
                      <p class="font-Coda text-xs m-0">codigo producto</p>
                    </div>

                    <div class="flex ml-6 mt-[0.45rem]">
                      <p class="font-Poppins font-extrabold text-secondary-green text-2xl">11</p>   
                    </div>

                </div>
              
                <div class="flex border border-black h-12">

                  <div class="flex flex-col ml-2 mt-1">
                    <p class="font-Coda text-xs m-0">nombre producto</p>
                    <p class="font-Coda text-xs m-0">codigo producto</p>
                  </div>

                  <div class="flex ml-6 mt-[0.45rem]">
                    <p class="font-Poppins font-extrabold text-secondary-green text-2xl">1</p>   
                  </div>

                </div>
              
                <div class="flex border border-black h-12">

                  <div class="flex flex-col ml-2 mt-1">
                    <p class="font-Coda text-xs m-0">nombre producto</p>
                    <p class="font-Coda text-xs m-0">codigo producto</p>
                  </div>

                  <div class="flex ml-6 mt-[0.45rem]">
                    <p class="font-Poppins font-extrabold text-secondary-green text-2xl">10</p>   
                  </div>

                </div>
              
                <div class="flex border border-black h-12">

                  <div class="flex flex-col ml-2 mt-1">
                    <p class="font-Coda text-xs m-0">nombre producto</p>
                    <p class="font-Coda text-xs m-0">codigo producto</p>
                  </div>

                  <div class="flex ml-6 mt-[0.45rem]">
                    <p class="font-Poppins font-extrabold text-secondary-green text-2xl">2</p>   
                  </div>

                </div>
              
                <div class="flex border border-black h-12">

                  <div class="flex flex-col ml-2 mt-1">
                    <p class="font-Coda text-xs m-0">nombre producto</p>
                    <p class="font-Coda text-xs m-0">codigo producto</p>
                  </div>

                  <div class="flex ml-6 mt-[0.45rem]">
                    <p class="font-Poppins font-extrabold text-secondary-green text-2xl">30</p>   
                  </div>

                  </div>
              
                </div>
            </div>
                  <div class="text-right mt-[48px] mr-7">
                    <p class="font-Coda font-black text-lg">N° 1234</p>
                  </div>
            </div> 
          
          <!-- card 2 -->
          <div class="w-[45%] h-60 bg-card-bg mr-4 rounded-lg">
            <div class="ml-4 mt-[20px] mr-3">
              <!-- info cliente -->
                <div class="border-b-2 border-dotted border-main-green columns-2 m-1">

                    <div class="font-Poppins text-secondary-green mt-2">
                      <h3>ENTREGADO</h3>
                    </div>

                    <div class="font-Coda text-main-green text-right mr-2">
                      <p class="m-0">Cliente: Juanito Cruz</p>
                      <p class="m-0">Fecha: 03/09/24</p>
                    </div>

                </div>
              <!-- productos -->
              <div class="flex-auto ml-1 box-border h-16 grid grid-cols-3 gap-2 mr-4 mt-3 text-secondary-green ">

                <div class="flex border border-black h-12">
                    <div class="flex flex-col ml-2 mt-1">

                      <p class="font-Coda text-xs m-0">nombre producto</p>
                      <p class="font-Coda text-xs m-0">codigo producto</p>
                    </div>

                    <div class="flex ml-6 mt-[0.45rem]">
                      <p class="font-Poppins font-extrabold text-secondary-green text-2xl">23</p>   
                    </div>

                </div>
              
                <div class="flex border border-black h-12">

                    <div class="flex flex-col ml-2 mt-1">
                      <p class="font-Coda text-xs m-0">nombre producto</p>
                      <p class="font-Coda text-xs m-0">codigo producto</p>
                    </div>

                    <div class="flex ml-6 mt-[0.45rem]">
                      <p class="font-Poppins font-extrabold text-secondary-green text-2xl">11</p>   
                    </div>

                </div>
              
                <div class="flex border border-black h-12">

                  <div class="flex flex-col ml-2 mt-1">
                    <p class="font-Coda text-xs m-0">nombre producto</p>
                    <p class="font-Coda text-xs m-0">codigo producto</p>
                  </div>

                  <div class="flex ml-6 mt-[0.45rem]">
                    <p class="font-Poppins font-extrabold text-secondary-green text-2xl">1</p>   
                  </div>

                </div>
              
                <div class="flex border border-black h-12">

                  <div class="flex flex-col ml-2 mt-1">
                    <p class="font-Coda text-xs m-0">nombre producto</p>
                    <p class="font-Coda text-xs m-0">codigo producto</p>
                  </div>

                  <div class="flex ml-6 mt-[0.45rem]">
                    <p class="font-Poppins font-extrabold text-secondary-green text-2xl">10</p>   
                  </div>

                </div>
              
                <div class="flex border border-black h-12">

                  <div class="flex flex-col ml-2 mt-1">
                    <p class="font-Coda text-xs m-0">nombre producto</p>
                    <p class="font-Coda text-xs m-0">codigo producto</p>
                  </div>

                  <div class="flex ml-6 mt-[0.45rem]">
                    <p class="font-Poppins font-extrabold text-secondary-green text-2xl">2</p>   
                  </div>

                </div>
              
                <div class="flex border border-black h-12">

                  <div class="flex flex-col ml-2 mt-1">
                    <p class="font-Coda text-xs m-0">nombre producto</p>
                    <p class="font-Coda text-xs m-0">codigo producto</p>
                  </div>

                  <div class="flex ml-6 mt-[0.45rem]">
                    <p class="font-Poppins font-extrabold text-secondary-green text-2xl">30</p>   
                  </div>

                  </div>
              
                </div>
            </div>
                  <div class="text-right mt-[48px] mr-7">
                    <p class="font-Coda font-black text-lg">N° 1234</p>
                  </div>
            </div> 
          <!-- card 3 -->
          <div class="w-[45%] h-60 bg-card-bg mr-4 rounded-lg">
            <div class="ml-4 mt-[20px] mr-3">
              <!-- info cliente -->
                <div class="border-b-2 border-dotted border-main-green columns-2 m-1">

                    <div class="font-Poppins text-secondary-green mt-2">
                      <h3>ENTREGADO</h3>
                    </div>

                    <div class="font-Coda text-main-green text-right mr-2">
                      <p class="m-0">Cliente: Juanito Cruz</p>
                      <p class="m-0">Fecha: 03/09/24</p>
                    </div>

                </div>
              <!-- productos -->
              <div class="flex-auto ml-1 box-border h-16 grid grid-cols-3 gap-2 mr-4 mt-3 text-secondary-green ">

                <div class="flex border border-black h-12">
                    <div class="flex flex-col ml-2 mt-1">

                      <p class="font-Coda text-xs m-0">nombre producto</p>
                      <p class="font-Coda text-xs m-0">codigo producto</p>
                    </div>

                    <div class="flex ml-6 mt-[0.45rem]">
                      <p class="font-Poppins font-extrabold text-secondary-green text-2xl">23</p>   
                    </div>

                </div>
              
                <div class="flex border border-black h-12">

                    <div class="flex flex-col ml-2 mt-1">
                      <p class="font-Coda text-xs m-0">nombre producto</p>
                      <p class="font-Coda text-xs m-0">codigo producto</p>
                    </div>

                    <div class="flex ml-6 mt-[0.45rem]">
                      <p class="font-Poppins font-extrabold text-secondary-green text-2xl">11</p>   
                    </div>

                </div>
              
                <div class="flex border border-black h-12">

                  <div class="flex flex-col ml-2 mt-1">
                    <p class="font-Coda text-xs m-0">nombre producto</p>
                    <p class="font-Coda text-xs m-0">codigo producto</p>
                  </div>

                  <div class="flex ml-6 mt-[0.45rem]">
                    <p class="font-Poppins font-extrabold text-secondary-green text-2xl">1</p>   
                  </div>

                </div>
              
                <div class="flex border border-black h-12">

                  <div class="flex flex-col ml-2 mt-1">
                    <p class="font-Coda text-xs m-0">nombre producto</p>
                    <p class="font-Coda text-xs m-0">codigo producto</p>
                  </div>

                  <div class="flex ml-6 mt-[0.45rem]">
                    <p class="font-Poppins font-extrabold text-secondary-green text-2xl">10</p>   
                  </div>

                </div>
              
                <div class="flex border border-black h-12">

                  <div class="flex flex-col ml-2 mt-1">
                    <p class="font-Coda text-xs m-0">nombre producto</p>
                    <p class="font-Coda text-xs m-0">codigo producto</p>
                  </div>

                  <div class="flex ml-6 mt-[0.45rem]">
                    <p class="font-Poppins font-extrabold text-secondary-green text-2xl">2</p>   
                  </div>

                </div>
              
                <div class="flex border border-black h-12">

                  <div class="flex flex-col ml-2 mt-1">
                    <p class="font-Coda text-xs m-0">nombre producto</p>
                    <p class="font-Coda text-xs m-0">codigo producto</p>
                  </div>

                  <div class="flex ml-6 mt-[0.45rem]">
                    <p class="font-Poppins font-extrabold text-secondary-green text-2xl">30</p>   
                  </div>

                  </div>
              
                </div>
            </div>
                  <div class="text-right mt-[48px] mr-7">
                    <p class="font-Coda font-black text-lg">N° 1234</p>
                  </div>
            </div> 
          <!-- card 4 -->
          <div class="w-[45%] h-60 bg-card-bg mr-4 rounded-lg">
            <div class="ml-4 mt-[20px] mr-3">
              <!-- info cliente -->
                <div class="border-b-2 border-dotted border-main-green columns-2 m-1">

                    <div class="font-Poppins text-secondary-green mt-2">
                      <h3>ENTREGADO</h3>
                    </div>

                    <div class="font-Coda text-main-green text-right mr-2">
                      <p class="m-0">Cliente: Juanito Cruz</p>
                      <p class="m-0">Fecha: 03/09/24</p>
                    </div>

                </div>
              <!-- productos -->
              <div class="flex-auto ml-1 box-border h-16 grid grid-cols-3 gap-2 mr-4 mt-3 text-secondary-green ">

                <div class="flex border border-black h-12">
                    <div class="flex flex-col ml-2 mt-1">

                      <p class="font-Coda text-xs m-0">nombre producto</p>
                      <p class="font-Coda text-xs m-0">codigo producto</p>
                    </div>

                    <div class="flex ml-6 mt-[0.45rem]">
                      <p class="font-Poppins font-extrabold text-secondary-green text-2xl">23</p>   
                    </div>

                </div>
              
                <div class="flex border border-black h-12">

                    <div class="flex flex-col ml-2 mt-1">
                      <p class="font-Coda text-xs m-0">nombre producto</p>
                      <p class="font-Coda text-xs m-0">codigo producto</p>
                    </div>

                    <div class="flex ml-6 mt-[0.45rem]">
                      <p class="font-Poppins font-extrabold text-secondary-green text-2xl">11</p>   
                    </div>

                </div>
              
                <div class="flex border border-black h-12">

                  <div class="flex flex-col ml-2 mt-1">
                    <p class="font-Coda text-xs m-0">nombre producto</p>
                    <p class="font-Coda text-xs m-0">codigo producto</p>
                  </div>

                  <div class="flex ml-6 mt-[0.45rem]">
                    <p class="font-Poppins font-extrabold text-secondary-green text-2xl">1</p>   
                  </div>

                </div>
              
                <div class="flex border border-black h-12">

                  <div class="flex flex-col ml-2 mt-1">
                    <p class="font-Coda text-xs m-0">nombre producto</p>
                    <p class="font-Coda text-xs m-0">codigo producto</p>
                  </div>

                  <div class="flex ml-6 mt-[0.45rem]">
                    <p class="font-Poppins font-extrabold text-secondary-green text-2xl">10</p>   
                  </div>

                </div>
              
                <div class="flex border border-black h-12">

                  <div class="flex flex-col ml-2 mt-1">
                    <p class="font-Coda text-xs m-0">nombre producto</p>
                    <p class="font-Coda text-xs m-0">codigo producto</p>
                  </div>

                  <div class="flex ml-6 mt-[0.45rem]">
                    <p class="font-Poppins font-extrabold text-secondary-green text-2xl">2</p>   
                  </div>

                </div>
              
                <div class="flex border border-black h-12">

                  <div class="flex flex-col ml-2 mt-1">
                    <p class="font-Coda text-xs m-0">nombre producto</p>
                    <p class="font-Coda text-xs m-0">codigo producto</p>
                  </div>

                  <div class="flex ml-6 mt-[0.45rem]">
                    <p class="font-Poppins font-extrabold text-secondary-green text-2xl">30</p>   
                  </div>

                  </div>
              
                </div>
            </div>
                  <div class="text-right mt-[48px] mr-7">
                    <p class="font-Coda font-black text-lg">N° 1234</p>
                  </div>
            </div> 

        </div>
    </div>
</section>
<!-- --------------BODY-------------- -->

<!-- MODAL AGREGAR RESERVA -->
<div id="modal-component-container" class="fixed inset-0 opacity-0 hidden transition-opacity duration-500">
  <div class="modal-flex-container flex items-end justify-center">

    <div class="modal-bg-container fixed inset-0 bg-gray-700 bg-opacity-75"> 
    </div> 

    <div class="modal-space-container"> 
    </div>

    <div id="modal-container" class="modal-container inline-block align-bottom bg-cream rounded-lg text-left 
     overflow-hidden shadow-xl transform transition-all mt-32">
      <div class="modal-wrapper bg-cream px-16 pt-4 pb-16"> 
        <div class="modal-wrapper-flex sm:flex sm:items-start">
          <div class="modal-content text-center mt-2">
            <h2>Agregar reserva</h2>
            <div class="modal-text flex flex-row gap-4 mt-4">
              <div class="bg-card-bg rounded-lg">

                <div class="m-10 overflow-invisible overflow-y-scroll  h-64">

                  <div class="flex border border-black h-14 w-72 mt-1 ml-2">
                    <div class="flex flex-col ml-4 mt-2">

                      <p class="font-Coda text-xs m-0">nombre producto</p>
                      <p class="font-Coda text-xs m-0">codigo producto</p>
                    </div>

                    <div class="flex ml-24 mt-[0.76rem]">
                      <p class="font-Poppins font-extrabold text-secondary-green text-2xl">23</p>   
                    </div>
                  </div>
                  

                </div>
                
              </div>

              <div class="flex-col">

                <div> 
                  <div class="bg-card-bg rounded-lg h-40 mb-4" >
                    <p>Cliente:</p>
                    <p>Contacto:</p>
                    <p>Fecha de entrega:</p>
                  </div>

                  <div class="bg-card-bg rounded-lg h-40"> 
                    <label for="productName" class="font-Coda">Nombre del producto </label> <br>
                    <input class="rounded-lg my-2 bg-card-bg w-96" type="text" id="productName" name="productName" required><br>
                  </div>

                </div>

              </div>

            </div>
          </div>
        </div> 

        <div class="mt-4 ml-[270px]">
          <button onclick="hideModalAgregar()" class="text-white bg-main-green px-4 py-1 rounded-lg font-Poppins">Volver</button>
          <button onclick="hideModalAgregar()" class="text-white bg-main-green px-4 py-1 rounded-lg font-Poppins">Guardar</button>
        </div>

      
      </div>

    </div>

    <script>
      function showModalAgregar(){
        let dialog = document.getElementById('modal-component-container');
        dialog.classList.remove('hidden');
        dialog.classList.add('opacity-100');
      }

      function hideModalAgregar(){
        let dialog = document.getElementById('modal-component-container');
        dialog.classList.add('opacity-0');
        dialog.classList.add('hidden');
      }
  
    </script>
  </div>

  

@endsection