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

        
            <button onclick="showModalAgregar()" class="text-white bg-main-green ml-[28rem] mt-12 px-4 py-1 rounded-lg font-Poppins">
                Agregar reserva
            </button>  
    </div>

    <div class="columns-2 flex">
  
    <div class="basis-1/6">
           <a href="{{route('home')}}"> <svg class="mx-auto mb-8 transition-all duration-300 hover:w-24 hover:h-24" xmlns="http://www.w3.org/2000/svg" width="90" height="70" viewBox="0 0 120 120" fill="none">
                <circle class="hover:fill-[#717EC3]" cx="60" cy="60" r="60" fill="#26413C"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M47.1111 78.219C47.1111 77.6297 47.3451 77.0646 47.7618 76.6479C48.1785 76.2312 48.7436 75.9972 49.3329 75.9972H89.3261C89.9154 75.9972 90.4805 76.2312 90.8972 76.6479C91.3138 77.0646 91.5479 77.6297 91.5479 78.219C91.5479 78.8083 91.3138 79.3734 90.8972 79.7901C90.4805 80.2068 89.9154 80.4408 89.3261 80.4408H49.3329C48.7436 80.4408 48.1785 80.2068 47.7618 79.7901C47.3451 79.3734 47.1111 78.8083 47.1111 78.219ZM47.1111 60.4443C47.1111 59.855 47.3451 59.2899 47.7618 58.8732C48.1785 58.4565 48.7436 58.2224 49.3329 58.2224H89.3261C89.9154 58.2224 90.4805 58.4565 90.8972 58.8732C91.3138 59.2899 91.5479 59.855 91.5479 60.4443C91.5479 61.0335 91.3138 61.5987 90.8972 62.0153C90.4805 62.432 89.9154 62.6661 89.3261 62.6661H49.3329C48.7436 62.6661 48.1785 62.432 47.7618 62.0153C47.3451 61.5987 47.1111 61.0335 47.1111 60.4443ZM47.1111 42.6695C47.1111 42.0802 47.3451 41.5151 47.7618 41.0984C48.1785 40.6817 48.7436 40.4477 49.3329 40.4477H89.3261C89.9154 40.4477 90.4805 40.6817 90.8972 41.0984C91.3138 41.5151 91.5479 42.0802 91.5479 42.6695C91.5479 43.2588 91.3138 43.8239 90.8972 44.2406C90.4805 44.6573 89.9154 44.8913 89.3261 44.8913H49.3329C48.7436 44.8913 48.1785 44.6573 47.7618 44.2406C47.3451 43.8239 47.1111 43.2588 47.1111 42.6695ZM42.0186 36.6527C42.2255 36.8591 42.3897 37.1043 42.5017 37.3743C42.6137 37.6442 42.6713 37.9336 42.6713 38.2258C42.6713 38.5181 42.6137 38.8074 42.5017 39.0774C42.3897 39.3473 42.2255 39.5925 42.0186 39.7989L35.3531 46.4644C35.1467 46.6713 34.9015 46.8355 34.6316 46.9475C34.3616 47.0595 34.0722 47.1172 33.78 47.1172C33.4877 47.1172 33.1984 47.0595 32.9284 46.9475C32.6585 46.8355 32.4133 46.6713 32.2069 46.4644L29.9851 44.2426C29.7785 44.036 29.6146 43.7907 29.5028 43.5208C29.391 43.2509 29.3335 42.9616 29.3335 42.6695C29.3335 42.3774 29.391 42.0881 29.5028 41.8182C29.6146 41.5483 29.7785 41.303 29.9851 41.0964C30.1917 40.8899 30.4369 40.726 30.7068 40.6142C30.9767 40.5024 31.266 40.4449 31.5581 40.4449C31.8503 40.4449 32.1396 40.5024 32.4095 40.6142C32.6794 40.726 32.9246 40.8899 33.1312 41.0964L33.78 41.7497L38.8725 36.6527C39.0788 36.4458 39.324 36.2817 39.594 36.1697C39.8639 36.0577 40.1533 36 40.4455 36C40.7378 36 41.0271 36.0577 41.2971 36.1697C41.567 36.2817 41.8122 36.4458 42.0186 36.6527ZM42.0186 54.4275C42.2255 54.6339 42.3897 54.8791 42.5017 55.149C42.6137 55.4189 42.6713 55.7083 42.6713 56.0006C42.6713 56.2928 42.6137 56.5822 42.5017 56.8521C42.3897 57.1221 42.2255 57.3672 42.0186 57.5736L35.3531 64.2392C35.1467 64.4461 34.9015 64.6102 34.6316 64.7222C34.3616 64.8343 34.0722 64.8919 33.78 64.8919C33.4877 64.8919 33.1984 64.8343 32.9284 64.7222C32.6585 64.6102 32.4133 64.4461 32.2069 64.2392L29.9851 62.0173C29.5679 61.6001 29.3335 61.0343 29.3335 60.4443C29.3335 59.8542 29.5679 59.2884 29.9851 58.8712C30.4023 58.454 30.9681 58.2196 31.5581 58.2196C32.1482 58.2196 32.714 58.454 33.1312 58.8712L33.78 59.5244L38.8725 54.4275C39.0788 54.2206 39.324 54.0564 39.594 53.9444C39.8639 53.8324 40.1533 53.7748 40.4455 53.7748C40.7378 53.7748 41.0271 53.8324 41.2971 53.9444C41.567 54.0564 41.8122 54.2206 42.0186 54.4275ZM42.0186 72.2023C42.2255 72.4086 42.3897 72.6538 42.5017 72.9238C42.6137 73.1937 42.6713 73.4831 42.6713 73.7753C42.6713 74.0676 42.6137 74.3569 42.5017 74.6269C42.3897 74.8968 42.2255 75.142 42.0186 75.3484L35.3531 82.0139C35.1467 82.2208 34.9015 82.385 34.6316 82.497C34.3616 82.609 34.0722 82.6667 33.78 82.6667C33.4877 82.6667 33.1984 82.609 32.9284 82.497C32.6585 82.385 32.4133 82.2208 32.2069 82.0139L29.9851 79.7921C29.5679 79.3749 29.3335 78.809 29.3335 78.219C29.3335 77.629 29.5679 77.0631 29.9851 76.6459C30.4023 76.2287 30.9681 75.9944 31.5581 75.9944C32.1482 75.9944 32.714 76.2287 33.1312 76.6459L33.78 77.2992L38.8725 72.2023C39.0788 71.9953 39.324 71.8312 39.594 71.7192C39.8639 71.6072 40.1533 71.5495 40.4455 71.5495C40.7378 71.5495 41.0271 71.6072 41.2971 71.7192C41.567 71.8312 41.8122 71.9953 42.0186 72.2023Z" fill="white"/>
            </svg></a>

            <a href="{{route('home')}}"> <svg class="mx-auto mb-8 transition-all duration-300 hover:w-24 hover:h-24" xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 90 90" fill="none">
            <circle class="hover:fill-[#717EC3]" cx="45" cy="45" r="45" fill="#26413C"/>
                <path d="M45.1343 24.9285C44.7969 24.7933 44.4204 24.7933 44.083 24.9285L27.2169 31.6744L34.0108 34.3902L51.4025 27.4353L45.1343 24.9285ZM55.2064 28.9585L37.8147 35.9135L44.6086 38.6293L62.0003 31.6744L55.2064 28.9585ZM64.3912 33.7628L46.0217 41.1106V63.4988L64.3912 56.151V33.7628ZM43.1956 63.5016V41.1078L24.8261 33.7628V56.1538L43.1956 63.5016ZM43.0345 22.3031C44.045 21.899 45.1722 21.899 46.1827 22.3031L66.3298 30.3631C66.5918 30.468 66.8163 30.649 66.9744 30.8828C67.1326 31.1165 67.2172 31.3922 67.2172 31.6744V56.1538C67.2169 56.7186 67.0473 57.2702 66.7305 57.7377C66.4137 58.2051 65.964 58.5669 65.4396 58.7764L45.1343 66.8986C44.7969 67.0338 44.4204 67.0338 44.083 66.8986L23.7804 58.7764C23.2555 58.5674 22.8053 58.2058 22.4879 57.7383C22.1705 57.2708 22.0006 56.7189 22 56.1538V31.6744C22.0001 31.3922 22.0846 31.1165 22.2428 30.8828C22.4009 30.649 22.6254 30.468 22.8874 30.3631L43.0345 22.3031Z" fill="white"/>
              </svg>
            </a>

              <a href="{{route('sales')}}"> <svg class="mx-auto mb-8 transition-all duration-300 hover:w-24 hover:h-24" xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 90 90" fill="none">
              <circle class="hover:fill-[#717EC3]" cx="45" cy="45" r="45" fill="#26413C"/>
                <path d="M21 24.6071C21 24.1809 21.1693 23.7721 21.4707 23.4707C21.7721 23.1693 22.1809 23 22.6071 23H27.4286C27.7871 23.0001 28.1352 23.1201 28.4177 23.3408C28.7002 23.5615 28.9007 23.8704 28.9875 24.2182L30.2893 29.4286H67.6071C67.8513 29.4286 68.0922 29.4843 68.3116 29.5914C68.5309 29.6985 68.7231 29.8541 68.8733 30.0465C69.0236 30.2389 69.128 30.463 69.1788 30.7018C69.2295 30.9406 69.2251 31.1878 69.1661 31.4246L64.3446 50.7104C64.2579 51.0582 64.0573 51.367 63.7748 51.5878C63.4924 51.8085 63.1442 51.9285 62.7857 51.9286H33.8571C33.4986 51.9285 33.1505 51.8085 32.868 51.5878C32.5855 51.367 32.385 51.0582 32.2982 50.7104L26.175 26.2143H22.6071C22.1809 26.2143 21.7721 26.045 21.4707 25.7436C21.1693 25.4422 21 25.0334 21 24.6071ZM31.0929 32.6429L32.7 39.0714H37.0714V32.6429H31.0929ZM40.2857 32.6429V39.0714H46.7143V32.6429H40.2857ZM49.9286 32.6429V39.0714H56.3571V32.6429H49.9286ZM59.5714 32.6429V39.0714H63.9429L65.55 32.6429H59.5714ZM63.1393 42.2857H59.5714V48.7143H61.5321L63.1393 42.2857ZM56.3571 42.2857H49.9286V48.7143H56.3571V42.2857ZM46.7143 42.2857H40.2857V48.7143H46.7143V42.2857ZM37.0714 42.2857H33.5036L35.1107 48.7143H37.0714V42.2857ZM37.0714 58.3571C36.2189 58.3571 35.4014 58.6958 34.7986 59.2986C34.1958 59.9014 33.8571 60.7189 33.8571 61.5714C33.8571 62.4239 34.1958 63.2415 34.7986 63.8443C35.4014 64.4471 36.2189 64.7857 37.0714 64.7857C37.9239 64.7857 38.7415 64.4471 39.3443 63.8443C39.9471 63.2415 40.2857 62.4239 40.2857 61.5714C40.2857 60.7189 39.9471 59.9014 39.3443 59.2986C38.7415 58.6958 37.9239 58.3571 37.0714 58.3571ZM30.6429 61.5714C30.6429 59.8665 31.3202 58.2313 32.5257 57.0257C33.7313 55.8202 35.3665 55.1429 37.0714 55.1429C38.7764 55.1429 40.4115 55.8202 41.6171 57.0257C42.8227 58.2313 43.5 59.8665 43.5 61.5714C43.5 63.2764 42.8227 64.9115 41.6171 66.1171C40.4115 67.3227 38.7764 68 37.0714 68C35.3665 68 33.7313 67.3227 32.5257 66.1171C31.3202 64.9115 30.6429 63.2764 30.6429 61.5714ZM59.5714 58.3571C58.7189 58.3571 57.9014 58.6958 57.2986 59.2986C56.6958 59.9014 56.3571 60.7189 56.3571 61.5714C56.3571 62.4239 56.6958 63.2415 57.2986 63.8443C57.9014 64.4471 58.7189 64.7857 59.5714 64.7857C60.4239 64.7857 61.2415 64.4471 61.8443 63.8443C62.4471 63.2415 62.7857 62.4239 62.7857 61.5714C62.7857 60.7189 62.4471 59.9014 61.8443 59.2986C61.2415 58.6958 60.4239 58.3571 59.5714 58.3571ZM53.1429 61.5714C53.1429 59.8665 53.8202 58.2313 55.0257 57.0257C56.2313 55.8202 57.8665 55.1429 59.5714 55.1429C61.2764 55.1429 62.9115 55.8202 64.1171 57.0257C65.3227 58.2313 66 59.8665 66 61.5714C66 63.2764 65.3227 64.9115 64.1171 66.1171C62.9115 67.3227 61.2764 68 59.5714 68C57.8665 68 56.2313 67.3227 55.0257 66.1171C53.8202 64.9115 53.1429 63.2764 53.1429 61.5714Z" fill="white"/>
            </svg>
            </a>

            <a href="{{route('reporte.diario')}}"> <svg class="mx-auto mb-8 transition-all duration-300 hover:w-24 hover:h-24" xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 90 90" fill="none">
            <circle class="hover:fill-[#717EC3]" cx="45" cy="45" r="45" fill="#26413C"/>
                <path d="M31.8569 55.1429C31.8569 54.2715 32.2031 53.4358 32.8193 52.8196C33.4355 52.2034 34.2712 51.8572 35.1426 51.8572C36.0141 51.8572 36.8498 52.2034 37.466 52.8196C38.0822 53.4358 38.4284 54.2715 38.4284 55.1429V58.4286C38.4284 59.3001 38.0822 60.1358 37.466 60.752C36.8498 61.3682 36.0141 61.7144 35.1426 61.7144C34.2712 61.7144 33.4355 61.3682 32.8193 60.752C32.2031 60.1358 31.8569 59.3001 31.8569 58.4286V55.1429ZM51.5712 42.0001C51.5712 41.1286 51.9174 40.2929 52.5336 39.6767C53.1498 39.0605 53.9855 38.7144 54.8569 38.7144C55.7284 38.7144 56.5641 39.0605 57.1803 39.6767C57.7965 40.2929 58.1426 41.1286 58.1426 42.0001V58.4286C58.1426 59.3001 57.7965 60.1358 57.1803 60.752C56.5641 61.3682 55.7284 61.7144 54.8569 61.7144C53.9855 61.7144 53.1498 61.3682 52.5336 60.752C51.9174 60.1358 51.5712 59.3001 51.5712 58.4286V42.0001ZM41.7141 48.5715C41.7141 47.7001 42.0603 46.8643 42.6764 46.2481C43.2926 45.632 44.1284 45.2858 44.9998 45.2858C45.8712 45.2858 46.707 45.632 47.3231 46.2481C47.9393 46.8643 48.2855 47.7001 48.2855 48.5715V58.4286C48.2855 59.3001 47.9393 60.1358 47.3231 60.752C46.707 61.3682 45.8712 61.7144 44.9998 61.7144C44.1284 61.7144 43.2926 61.3682 42.6764 60.752C42.0603 60.1358 41.7141 59.3001 41.7141 58.4286V48.5715Z" fill="white"/>
                <path d="M31.8571 23.9287H28.5714C26.8286 23.9287 25.1571 24.6211 23.9247 25.8534C22.6923 27.0858 22 28.7573 22 30.5001V65.0001C22 66.743 22.6923 68.4145 23.9247 69.6468C25.1571 70.8792 26.8286 71.5716 28.5714 71.5716H61.4286C63.1714 71.5716 64.8429 70.8792 66.0753 69.6468C67.3077 68.4145 68 66.743 68 65.0001V30.5001C68 28.7573 67.3077 27.0858 66.0753 25.8534C64.8429 24.6211 63.1714 23.9287 61.4286 23.9287H58.1429V27.2144H61.4286C62.3 27.2144 63.1357 27.5606 63.7519 28.1768C64.3681 28.793 64.7143 29.6287 64.7143 30.5001V65.0001C64.7143 65.8716 64.3681 66.7073 63.7519 67.3235C63.1357 67.9397 62.3 68.2859 61.4286 68.2859H28.5714C27.7 68.2859 26.8643 67.9397 26.2481 67.3235C25.6319 66.7073 25.2857 65.8716 25.2857 65.0001V30.5001C25.2857 29.6287 25.6319 28.793 26.2481 28.1768C26.8643 27.5606 27.7 27.2144 28.5714 27.2144H31.8571V23.9287Z" fill="white"/>
                <path d="M49.9288 22.2857C50.3645 22.2857 50.7824 22.4588 51.0905 22.7669C51.3986 23.075 51.5716 23.4929 51.5716 23.9286V27.2143C51.5716 27.65 51.3986 28.0679 51.0905 28.376C50.7824 28.6841 50.3645 28.8571 49.9288 28.8571H40.0716C39.6359 28.8571 39.2181 28.6841 38.91 28.376C38.6019 28.0679 38.4288 27.65 38.4288 27.2143V23.9286C38.4288 23.4929 38.6019 23.075 38.91 22.7669C39.2181 22.4588 39.6359 22.2857 40.0716 22.2857H49.9288ZM40.0716 19C38.7645 19 37.5109 19.5193 36.5866 20.4435C35.6623 21.3678 35.1431 22.6214 35.1431 23.9286V27.2143C35.1431 28.5214 35.6623 29.775 36.5866 30.6993C37.5109 31.6236 38.7645 32.1429 40.0716 32.1429H49.9288C51.2359 32.1429 52.4895 31.6236 53.4138 30.6993C54.3381 29.775 54.8574 28.5214 54.8574 27.2143V23.9286C54.8574 22.6214 54.3381 21.3678 53.4138 20.4435C52.4895 19.5193 51.2359 19 49.9288 19H40.0716Z" fill="white"/>
            </svg>
            </a>

            <a href="{{route('home')}}"> <svg class="mx-auto mb-8 transition-all duration-300 hover:w-24 hover:h-24" xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 90 90" fill="none">
            <circle class="hover:fill-[#717EC3]" cx="45" cy="45" r="45" fill="#26413C"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M30.9809 34.4083C29.7976 34.4083 28.8392 33.4208 29.0226 32.2542C30.1684 25.1667 35.5684 20 44.9392 20C54.3142 20 60.6351 25.6667 60.6351 33.3958C60.6351 38.9958 57.8642 42.9292 53.1767 45.7833C48.5934 48.5292 47.2851 50.4417 47.2851 54.1583V54.2833C47.2851 54.8359 47.0656 55.3658 46.6749 55.7565C46.2842 56.1472 45.7543 56.3667 45.2017 56.3667H41.9934C41.4445 56.3667 40.9177 56.1501 40.5276 55.7639C40.1375 55.3776 39.9156 54.8531 39.9101 54.3042L39.8976 53.4708C39.7184 48.3833 41.8851 45.1333 46.7517 42.1708C51.0434 39.5375 52.5726 37.4417 52.5726 33.7208C52.5726 29.6417 49.4142 26.6458 44.5476 26.6458C40.3434 26.6458 37.4226 28.85 36.4726 32.4875C36.1976 33.5458 35.3142 34.4083 34.2226 34.4083H30.9809ZM43.5684 70C46.1601 70 48.1309 68.025 48.1309 65.4583C48.1309 62.8833 46.1601 60.9083 43.5684 60.9083C41.0434 60.9083 39.0392 62.8833 39.0392 65.4542C39.0392 68.025 41.0434 70 43.5684 70Z" fill="white"/>
            </svg>
            </a>
        </div>
        
        <div class="overflow-y-scroll basis-5/6 gap-2 flex flex-wrap mt-2 h-[32rem]">
          
          <!-- card 1 -->
          <div onclick="showModalReserva()" class="w-[45%] h-60 bg-card-bg mr-4 rounded-lg">
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

  <!-- MODAL VER RESERVA -->
  <div id="modal-ver-reserva" class="fixed inset-0 opacity-0 hidden transition-opacity duration-500">

    <div class="modal-flex-container flex items-end justify-center">

      <div class="modal-bg-container fixed inset-0 bg-gray-700 bg-opacity-75">
      </div>

      <div class="modal-container inline-block align-bottom bg-main-green rounded-lg text-left 
      overflow-hidden shadow-xl transform transition-all mt-32 w-fit"> 

      <div class="modal-wrapper bg-main-green m-4"> 

        <div class="modal-wrapper-flex">

          <div class="modal-content">

            <div class="border-b-2 border-dotted border-white columns-2 m-1 w-[50rem]">
              
              <div class="text-white flex flex-col font-Poppins font-light ml-4 mb-4">
                <p class="m-0">Estado: Reservado</p>
                <p class="m-0">Cliente: Juanito Cruz</p>
                <p class="m-0">Fecha de entrega: 03/09/24<p>
              </div>

              <div class="text-white flex ml-64 font-Poppins font-light"> 
                <h2 class="my-3">N° 1234</h2>
              </div>
              
            </div>

            <div class="modal-text"> 

              <div class="overflow-auto rounded-lg h-96 m-2">

                <div>

                  <div class="grid grid-cols-2 gap-[0.01rem] mb-6 mr-0">

                    <div class="flex border border-white h-14 mt-1 ml-2 m-2">
                      <div class="flex flex-col ml-4 mt-2">

                        <p class="text-white font-Coda text-sm m-0">nombre producto</p>
                        <p class="text-white font-Coda text-sm m-0">codigo producto</p>

                      </div>

                      <div class="flex ml-24 mt-[0.76rem]">

                        <p class="text-white font-Poppins font-extrabold text-2xl">23</p>   

                      </div>
                    </div>

                    <div class="flex border border-white h-14 mt-1 ml-2 m-2">
                      <div class="flex flex-col ml-4 mt-2">

                        <p class="text-white font-Coda text-sm m-0">nombre producto</p>
                        <p class="text-white font-Coda text-sm m-0">codigo producto</p>

                      </div>

                      <div class="flex ml-24 mt-[0.76rem]">

                        <p class="text-white font-Poppins font-extrabold text-2xl">23</p>   

                      </div>
                    </div>

                    <div class="flex border border-white h-14 mt-1 ml-2 m-2">
                      <div class="flex flex-col ml-4 mt-2">

                        <p class="text-white font-Coda text-sm m-0">nombre producto</p>
                        <p class="text-white font-Coda text-sm m-0">codigo producto</p>

                      </div>

                      <div class="flex ml-24 mt-[0.76rem]">

                        <p class="text-white font-Poppins font-extrabold text-2xl">23</p>   

                      </div>
                    </div>

                    <div class="flex border border-white h-14 mt-1 ml-2 m-2">
                      <div class="flex flex-col ml-4 mt-2">

                        <p class="text-white font-Coda text-sm m-0">nombre producto</p>
                        <p class="text-white font-Coda text-sm m-0">codigo producto</p>

                      </div>

                      <div class="flex ml-24 mt-[0.76rem]">

                        <p class="text-white font-Poppins font-extrabold text-2xl">23</p>   

                      </div>
                    </div>

                    <div class="flex border border-white h-14 mt-1 ml-2 m-2">
                      <div class="flex flex-col ml-4 mt-2">

                        <p class="text-white font-Coda text-sm m-0">nombre producto</p>
                        <p class="text-white font-Coda text-sm m-0">codigo producto</p>

                      </div>

                      <div class="flex ml-24 mt-[0.76rem]">

                        <p class="text-white font-Poppins font-extrabold text-2xl">23</p>   

                      </div>
                    </div>

                    <div class="flex border border-white h-14 mt-1 ml-2 m-2">
                      <div class="flex flex-col ml-4 mt-2">

                        <p class="text-white font-Coda text-sm m-0">nombre producto</p>
                        <p class="text-white font-Coda text-sm m-0">codigo producto</p>

                      </div>

                      <div class="flex ml-24 mt-[0.76rem]">

                        <p class="text-white font-Poppins font-extrabold text-2xl">23</p>   

                      </div>
                    </div>

                    <div class="flex border border-white h-14 mt-1 ml-2 m-2">
                      <div class="flex flex-col ml-4 mt-2">

                        <p class="text-white font-Coda text-sm m-0">nombre producto</p>
                        <p class="text-white font-Coda text-sm m-0">codigo producto</p>

                      </div>

                      <div class="flex ml-24 mt-[0.76rem]">

                        <p class="text-white font-Poppins font-extrabold text-2xl">23</p>   

                      </div>
                    </div>
                    
                    <div class="flex border border-white h-14 mt-1 ml-2 m-2">
                      <div class="flex flex-col ml-4 mt-2">

                        <p class="text-white font-Coda text-sm m-0">nombre producto</p>
                        <p class="text-white font-Coda text-sm m-0">codigo producto</p>

                      </div>

                      <div class="flex ml-24 mt-[0.76rem]">

                        <p class="text-white font-Poppins font-extrabold text-2xl">23</p>   

                      </div>
                    </div>
                    
                    <div class="flex border border-white h-14 mt-1 ml-2 m-2">
                      <div class="flex flex-col ml-4 mt-2">

                        <p class="text-white font-Coda text-sm m-0">nombre producto</p>
                        <p class="text-white font-Coda text-sm m-0">codigo producto</p>

                      </div>

                      <div class="flex ml-24 mt-[0.76rem]">

                        <p class="text-white font-Poppins font-extrabold text-2xl">23</p>   

                      </div>
                    </div>
                    
                    <div class="flex border border-white h-14 mt-1 ml-2 m-2">
                      <div class="flex flex-col ml-4 mt-2">

                        <p class="text-white font-Coda text-sm m-0">nombre producto</p>
                        <p class="text-white font-Coda text-sm m-0">codigo producto</p>

                      </div>

                      <div class="flex ml-24 mt-[0.76rem]">

                        <p class="text-white font-Poppins font-extrabold text-2xl">23</p>   

                      </div>
                    </div>
                    
                    <div class="flex border border-white h-14 mt-1 ml-2 m-2">
                      <div class="flex flex-col ml-4 mt-2">

                        <p class="text-white font-Coda text-sm m-0">nombre producto</p>
                        <p class="text-white font-Coda text-sm m-0">codigo producto</p>

                      </div>

                      <div class="flex ml-24 mt-[0.76rem]">

                        <p class="text-white font-Poppins font-extrabold text-2xl">23</p>   

                      </div>
                    </div>
                    
                      <div class="flex border border-white h-14 mt-1 ml-2 m-2">
                      <div class="flex flex-col ml-4 mt-2">

                        <p class="text-white font-Coda text-sm m-0">nombre producto</p>
                        <p class="text-white font-Coda text-sm m-0">codigo producto</p>

                      </div>

                      <div class="flex ml-24 mt-[0.76rem]">

                        <p class="text-white font-Poppins font-extrabold text-2xl">23</p>   

                      </div>
                    </div>
                    
                  </div>

                  
                  
                  
                </div>
                
              </div>

            </div>

          </div>

        </div>

        <div class="ml-72">
          <button onclick="hideModalReserva()" class="text-white bg-secondary-green px-8 py-1 rounded-lg font-Poppins mr-2">Volver</button>
          <button onclick="showModalEditar()" class="text-white bg-secondary-green px-8 py-1 rounded-lg font-Poppins mr-2">Editar</button>
        </div>

      </div>

      </div>

    </div>

    <script>
      function showModalReserva(){
        let dialog = document.getElementById('modal-ver-reserva');
        dialog.classList.remove('hidden');
        dialog.classList.add('opacity-100');
      }
      function hideModalReserva(){
        let dialog = document.getElementById('modal-ver-reserva');
        dialog.classList.add('opacity-0');
        dialog.classList.add('hidden');
      }
    </script>

  </div>

   <!-- MODAL AGREGAR RESERVA -->
   <div id="modal-agregar-reserva" class="fixed inset-0 opacity-0 hidden transition-opacity duration-500">
    <div class="modal-flex-container flex items-end justify-center">

      <div class="modal-bg-container fixed inset-0 bg-gray-700 bg-opacity-75"> 
      </div> 

      <div id="modal-container" class="modal-container inline-block align-bottom bg-cream rounded-lg text-left 
     overflow-hidden shadow-xl transform transition-all mt-32">

      <div class="modal-wrapper bg-cream px-12 pt-2 pb-12"> 

        <div class="modal-wrapper-flex">

          <div class="modal-content text-center mt-2">

            <h2 class="font-Poppins font-medium mt-2">Agregar reserva</h2>

            <div class="modal-text flex flex-row gap-4 mt-4">

              <div class="bg-card-bg rounded-lg">

                <div class="m-5 overflow-auto h-80">

                  <div class="flex border border-black h-14 w-72 mt-1 ml-2 m-2">
                    <div class="flex flex-col ml-4 mt-2">

                      <p class="font-Coda text-sm m-0">nombre producto</p>
                      <p class="font-Coda text-sm m-0">codigo producto</p>

                    </div>

                    <div class="flex ml-24 mt-[0.76rem]">

                      <p class="font-Poppins font-extrabold text-secondary-green text-2xl">23</p>   

                    </div>
                  </div>
                  
                </div>
                
              </div>

              <div class="flex-col">

                <div> 
                  <div class="bg-card-bg rounded-lg p-2 mb-4 font-Coda font-semibold columns-2">

                    <div class="flex-col text-left mt-2 ml-10">
                      <p>Cliente:</p>
                      <p>Contacto:</p>
                      <p>Fecha de entrega:</p>
                    </div>

                    <button onclick="showModalEditar()" class="align-end bg-main-green p-2 ml-8 m-4 rounded-lg">
                      <svg xmlns="http://www.w3.org/2000/svg" width="57" height="56" viewBox="0 0 57 56" fill="none">
                        <path d="M56.4363 5.56418C56.7973 5.92622 57 6.41659 57 6.9278C57 7.43901 56.7973 7.92938 56.4363 8.29142L52.4068 12.3244L44.6799 4.59844L48.7094 0.565511C49.0717 0.203415 49.5629 0 50.0752 0C50.5874 0 51.0786 0.203415 51.4409 0.565511L56.4363 5.56031V5.56418ZM49.6753 15.0516L41.9484 7.32568L15.6267 33.6479C15.414 33.8604 15.254 34.1197 15.1592 34.405L12.0491 43.7302C11.9927 43.9002 11.9847 44.0825 12.026 44.2568C12.0673 44.4311 12.1562 44.5905 12.2829 44.7171C12.4096 44.8438 12.569 44.9327 12.7433 44.974C12.9176 45.0153 13.1 45.0073 13.27 44.9509L22.5964 41.8412C22.8813 41.7476 23.1406 41.5889 23.3536 41.3776L49.6753 15.0516Z" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 50.2143C0 51.7488 0.609565 53.2204 1.6946 54.3054C2.77963 55.3904 4.25125 56 5.78571 56H48.2143C49.7488 56 51.2204 55.3904 52.3054 54.3054C53.3904 53.2204 54 51.7488 54 50.2143V27.0714C54 26.5599 53.7968 26.0694 53.4351 25.7077C53.0735 25.346 52.5829 25.1429 52.0714 25.1429C51.5599 25.1429 51.0694 25.346 50.7077 25.7077C50.346 26.0694 50.1429 26.5599 50.1429 27.0714V50.2143C50.1429 50.7258 49.9397 51.2163 49.578 51.578C49.2163 51.9397 48.7258 52.1429 48.2143 52.1429H5.78571C5.27423 52.1429 4.78369 51.9397 4.42201 51.578C4.06033 51.2163 3.85714 50.7258 3.85714 50.2143V7.78571C3.85714 7.27423 4.06033 6.78369 4.42201 6.42201C4.78369 6.06033 5.27423 5.85714 5.78571 5.85714H30.8571C31.3686 5.85714 31.8592 5.65395 32.2209 5.29228C32.5825 4.9306 32.7857 4.44006 32.7857 3.92857C32.7857 3.41708 32.5825 2.92654 32.2209 2.56487C31.8592 2.20319 31.3686 2 30.8571 2H5.78571C4.25125 2 2.77963 2.60956 1.6946 3.6946C0.609565 4.77963 0 6.25125 0 7.78571V50.2143Z" fill="white"/>
                      </svg>
                    </button>

                  </div>

                  <div class="bg-card-bg rounded-lg p-10 text-left"> 

                    <label for="productName" class="font-Coda font-semibold">Nombre del producto</label> <br>
                    <input class="rounded-lg my-2 bg-white w-96" type="text" id="productName" name="productName" required><br>

                    <label for="productCant" class="font-Coda font-semibold">Cantidad del producto</label> <br>
                    <input class="rounded-lg my-2 bg-white w-96" type="number" id="productCant" name="productCant" required><br>

                    <button class="text-white bg-main-green ml-36 px-4 py-1 rounded-lg font-Poppins">
                      Agregar
                    </button>

                  </div>

                </div>

              </div>

            </div>
          </div>
        </div> 

        <div class="mt-4 ml-[300px]">
          <button onclick="hideModalAgregar()" class="text-white bg-main-green px-8 py-1 rounded-lg font-Poppins mr-2">Volver</button>
          <button onclick="hideModalAgregar()" class="text-white bg-main-green px-4 py-1 rounded-lg font-Poppins">Guardar</button>
        </div>

      
      </div>

      </div>

      <script>
      function showModalAgregar(){
        let dialog = document.getElementById('modal-agregar-reserva');
        dialog.classList.remove('hidden');
        dialog.classList.add('opacity-100');
      }

      function hideModalAgregar(){
        let dialog = document.getElementById('modal-agregar-reserva');
        dialog.classList.add('opacity-0');
        dialog.classList.add('hidden');
      }
  
      </script>
  </div>

  <!-- MODAL EDITAR RESERVA -->
  

@endsection