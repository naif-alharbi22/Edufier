<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EDU-fer</title>
    <!-- رابط مكتبة Bootstrap CSS -->
    <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <style>
    .btn {
      background-color: #9b72cf;
      color: white;
    }
    a {
      color: black;
    }
    .circle {
      /* Vector */
      position: absolute;
      width: 585.49px;
      border-radius: 10px;
      height: 486px;
      left: 1502px;
      top: 101px;
      background: rgba(155, 114, 207, 0.25);
      transform: rotate(57.59deg);
      margin-top: 4rem;
    }
    #levelsDropdown,
    #majorsDropdown,
    #contact,
    #howwe,
    #languageDropdown {
      color: black;
    }
    .head {
      margin-right: 10rem;
      direction: rtl;
      text-align: right;
    }
    .textt {
      text-align: right;
      margin-bottom: 1rem;
    }
    .imagelanding {
      display: flex;
      align-items: flex-end;
    }
    .imagelanding img {
      max-width: 100%;
    }
    .sec2 {
      width: 60%;
      text-align: right;
      margin-right: 10rem;
      color: white;
    }
    .sec3 {
      width: 60%;
      text-align: right;
      margin-right: 10rem;
    }
    .educ {
      max-width: 100px;
      margin-top: -10%;
      margin-left: 5rem;
      border-radius: 10px;
    }
    .section2 {
      background: linear-gradient(
        92.6deg,
        #9b72cf -3.9%,
        rgba(155, 114, 207, 0.576446) 69.38%,
        rgba(155, 114, 207, 0.18) 137.98%
      );
    }
    .section-title {
      text-align: center;
      color: #9b72cf;
      font-weight: bold;
      margin-bottom: 3rem;
    }
    .card-custom {
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      background-color: #f5f5f5;
      padding: 10px;
      transition: transform 0.3s, box-shadow 0.3s;
    }
    .card-custom:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    .icon-circle {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background-color: #9b72cf;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
    }
    .number-circle {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      background-color: #ede7f6;
      color: #9b72cf;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      margin: 0 auto;
    }
  </style>
  <body>
    <!-- ناف بار -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- الشعار -->
      <a class="navbar-brand" href="#">
      <img src="{{ asset('images/edufer.png') }}" alt="شعار" width="60" height="60" />
      </a>

      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" id="howwe" href="#about">من نحن</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact" href="#contact">تواصل معنا</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="majorsDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              المجالات
            </a>
            <div class="dropdown-menu" aria-labelledby="majorsDropdown">
              <a class="dropdown-item" href="#">مجال 1</a>
              <a class="dropdown-item" href="#">مجال 2</a>
              <a class="dropdown-item" href="#">مجال 3</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="levelsDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              المستويات
            </a>
            <div class="dropdown-menu" aria-labelledby="levelsDropdown">
              <a class="dropdown-item" href="#">مستوى 1</a>
              <a class="dropdown-item" href="#">مستوى 2</a>
              <a class="dropdown-item" href="#">مستوى 3</a>
            </div>
          </li>
        </ul>
        <div class="circle"></div>

        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="languageDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              اللغة العربية
            </a>
            <div class="dropdown-menu" aria-labelledby="languageDropdown">
              <a class="dropdown-item" href="#">العربية</a>
              <a class="dropdown-item" href="#">الإنجليزية</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="btn ml-2" href="form.html">اشترك معنا</a>
          </li>
        </ul>
      </div>
    </nav>
    <header>
      <div style="display: flex; align-items: center">
        <div class="head" style="width: 450px">
          <h1 class="textt1">
            طور مهاراتك بطريقة جديدة
            <strong style="color: #9b72cf">و</strong> فريدة من نوعها!
          </h1>
          <p class="textt2">
            هذا النظام ليس مجرد أداة لإدارة المعرفة، بل هو تجربة تعليمية تفاعلية
            تجعل التعلم ممتعًا وفعالًا. بفضل تصميمه المبتكر وميزاته المتقدمة،
            يفتح أفقًا جديدًا في تحويل التعليم إلى رحلة مليئة بالإلهام
            والاكتشاف.
          </p>
        </div>
        <div class="imagelanding">
          <img src="{{ asset('images/iiiiiiiiiimage.png') }}" alt="landing page" />
        </div>
      </div>
      <section class="section2">
        <div class="sec2">
          <h1>لماذا يجب اختيار EDU-fer؟</h1>
        </div>
        <div class="sec3">
          <p>
            لأن EDU-fer يقدم حلاً تعليميًا متكاملاً يرفع من كفاءة التعليم ويعزز
            تفاعل المتعلمين مع المحتوى. بفضل تصميمه المبتكر وميزاته المتقدمة،
            يُسهم EDU-fer في تحويل التعليم إلى تجربة تفاعلية وملهمة، مما يجعله
            الخيار الأمثل للمؤسسات التي تسعى لتطوير مهارات موظفيها بشكل فعّال
            وممتع.
          </p>
        </div>
        <img class="educ" src="{{ asset('images/b0377e7eb7b7b317ae115c4090400290.jpg') }}" />
      </section>
    </header>
    <div class="container mt-5">
      <h2 class="section-title">كيف يعمل EDU-fer؟</h2>
      <div class="row">
        <!-- البطاقة الأولى -->
        <div class="col-md-4 mb-4">
          <div class="card card-custom text-center">
            <div class="d-flex align-items-center justify-content-center mb-3">
              <div class="icon-circle">
                <svg
                  width="100"
                  height="100"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle
                    cx="12"
                    cy="12"
                    r="8"
                    stroke="#9B72CF"
                    stroke-width="2"
                    fill="white"
                  />
                  <circle
                    cx="12"
                    cy="12"
                    r="4"
                    stroke="#9B72CF"
                    stroke-width="2"
                    fill="white"
                  />

                  <path
                    d="M12 20V10"
                    stroke="#9B72CF"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <path
                    d="M9 13L12 10L15 13"
                    stroke="#9B72CF"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>
            </div>
            <div class="number-circle">1</div>
            <h5 class="font-weight-bold">تتبع الأداء</h5>
            <p>
              يوفر fer-EDU أدوات متقدمة لتتبع تقدم الموظفين وتقييم أدائهم، مما
              يساعد على تقديم تغذية راجعة مستمرة وتحفيز مستمر.
            </p>
          </div>
        </div>
        <!-- البطاقة الثانية -->
        <div class="col-md-4 mb-4">
          <div class="card card-custom text-center">
            <div class="d-flex align-items-center justify-content-center mb-3">
              <div class="icon-circle">
                <svg
                  width="124"
                  height="124"
                  viewBox="0 0 124 124"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <rect width="124" height="124" rx="62" fill="#9B72CF" />
                  <path
                    d="M31.125 24C29.2353 24 27.4231 24.7507 26.0869 26.0869C24.7507 27.4231 24 29.2353 24 31.125V64.375C24 66.2647 24.7507 68.0769 26.0869 69.4131C27.4231 70.7493 29.2353 71.5 31.125 71.5H52.5V76.25H28.75C27.4902 76.25 26.282 76.7504 25.3912 77.6412C24.5004 78.532 24 79.7402 24 81V95.25C24 96.5098 24.5004 97.718 25.3912 98.6088C26.282 99.4996 27.4902 100 28.75 100H95.25C96.5098 100 97.718 99.4996 98.6088 98.6088C99.4996 97.718 100 96.5098 100 95.25V81C100 79.7402 99.4996 78.532 98.6088 77.6412C97.718 76.7504 96.5098 76.25 95.25 76.25H71.5V71.5H92.875C94.7647 71.5 96.5769 70.7493 97.9131 69.4131C99.2493 68.0769 100 66.2647 100 64.375V31.125C100 29.2353 99.2493 27.4231 97.9131 26.0869C96.5769 24.7507 94.7647 24 92.875 24H31.125ZM31.125 28.75H92.875C93.5049 28.75 94.109 29.0002 94.5544 29.4456C94.9998 29.891 95.25 30.4951 95.25 31.125V64.375C95.25 65.0049 94.9998 65.609 94.5544 66.0544C94.109 66.4998 93.5049 66.75 92.875 66.75H31.125C30.4951 66.75 29.891 66.4998 29.4456 66.0544C29.0002 65.609 28.75 65.0049 28.75 64.375V31.125C28.75 30.4951 29.0002 29.891 29.4456 29.4456C29.891 29.0002 30.4951 28.75 31.125 28.75ZM81 83.375C81 82.7451 81.2502 82.141 81.6956 81.6956C82.141 81.2502 82.7451 81 83.375 81C84.0049 81 84.609 81.2502 85.0544 81.6956C85.4998 82.141 85.75 82.7451 85.75 83.375C85.75 84.0049 85.4998 84.609 85.0544 85.0544C84.609 85.4998 84.0049 85.75 83.375 85.75C82.7451 85.75 82.141 85.4998 81.6956 85.0544C81.2502 84.609 81 84.0049 81 83.375ZM90.5 83.375C90.5 82.7451 90.7502 82.141 91.1956 81.6956C91.641 81.2502 92.2451 81 92.875 81C93.5049 81 94.109 81.2502 94.5544 81.6956C94.9998 82.141 95.25 82.7451 95.25 83.375C95.25 84.0049 94.9998 84.609 94.5544 85.0544C94.109 85.4998 93.5049 85.75 92.875 85.75C92.2451 85.75 91.641 85.4998 91.1956 85.0544C90.7502 84.609 90.5 84.0049 90.5 83.375ZM31.125 81H54.875C55.5049 81 56.109 81.2502 56.5544 81.6956C56.9998 82.141 57.25 82.7451 57.25 83.375C57.25 84.0049 56.9998 84.609 56.5544 85.0544C56.109 85.4998 55.5049 85.75 54.875 85.75H31.125C30.4951 85.75 29.891 85.4998 29.4456 85.0544C29.0002 84.609 28.75 84.0049 28.75 83.375C28.75 82.7451 29.0002 82.141 29.4456 81.6956C29.891 81.2502 30.4951 81 31.125 81ZM28.75 91.6875C28.75 91.3726 28.8751 91.0705 29.0978 90.8478C29.3205 90.6251 29.6226 90.5 29.9375 90.5H56.0625C56.3774 90.5 56.6795 90.6251 56.9022 90.8478C57.1249 91.0705 57.25 91.3726 57.25 91.6875C57.25 92.0024 57.1249 92.3045 56.9022 92.5272C56.6795 92.7499 56.3774 92.875 56.0625 92.875H29.9375C29.6226 92.875 29.3205 92.7499 29.0978 92.5272C28.8751 92.3045 28.75 92.0024 28.75 91.6875Z"
                    fill="white"
                  />
                </svg>
              </div>
            </div>
            <div class="number-circle">2</div>
            <h5 class="font-weight-bold">التعلم التفاعلي</h5>
            <p>
              يتيح النظام بيئة تعليمية تفاعلية حيث يمكن للموظفين التفاعل مع
              المحتوى التعليمي من خلال الأنشطة التفاعلية، الألعاب التعليمية،
              والاختبارات.
            </p>
          </div>
        </div>
        <!-- البطاقة الثالثة -->
        <div class="col-md-4 mb-4">
          <div class="card card-custom text-center">
            <div class="d-flex align-items-center justify-content-center mb-3">
              <div class="icon-circle">
                <svg
                  width="124"
                  height="124"
                  viewBox="0 0 124 124"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <rect width="124" height="124" rx="62" fill="#9B72CF" />
                  <path
                    d="M37.8439 35.8905C38.2617 35.4338 38.7685 35.0694 39.3324 34.8202C39.8963 34.571 40.5051 34.4423 41.1206 34.4423H48.6125C49.4579 34.4423 50.2686 34.1029 50.8664 33.4989C51.4642 32.8948 51.8 32.0755 51.8 31.2212C51.8 30.3669 51.4642 29.5475 50.8664 28.9435C50.2686 28.3394 49.4579 28 48.6125 28H41.1206C39.6263 27.9999 38.1482 28.3122 36.779 28.9171C35.4099 29.5219 34.1793 30.4064 33.1646 31.5149L14.723 51.6613C13.9912 52.339 13.346 53.1121 12.8105 53.9599C11.6307 55.7546 11.0009 57.8611 11 60.0157V78.25C11 82.6924 12.7463 86.9528 15.8547 90.094C18.9631 93.2353 23.179 95 27.575 95H40.325C42.5017 95 44.657 94.5668 46.668 93.725C48.6789 92.8832 50.5062 91.6494 52.0453 90.094C53.5844 88.5387 54.8053 86.6922 55.6383 84.6599C56.4713 82.6277 56.9 80.4496 56.9 78.25V65.3654H67.1V78.25C67.1 82.6924 68.8463 86.9528 71.9547 90.094C75.0631 93.2353 79.279 95 83.675 95H96.425C98.6017 95 100.757 94.5668 102.768 93.725C104.779 92.8832 106.606 91.6494 108.145 90.094C109.684 88.5387 110.905 86.6922 111.738 84.6599C112.571 82.6277 113 80.4496 113 78.25V60.0183C112.999 57.8637 112.369 55.7572 111.19 53.9625C110.653 53.1149 110.011 52.3413 109.277 51.6613L90.8354 31.5149C89.8207 30.4064 88.5901 29.5219 87.221 28.9171C85.8518 28.3122 84.3737 27.9999 82.8794 28H75.3875C74.5421 28 73.7314 28.3394 73.1336 28.9435C72.5358 29.5475 72.2 30.3669 72.2 31.2212C72.2 32.0755 72.5358 32.8948 73.1336 33.4989C73.7314 34.1029 74.5421 34.4423 75.3875 34.4423H82.8794C84.1238 34.4423 85.3121 34.968 86.1561 35.8905L97.8045 48.6154H78.575C75.7525 48.6155 73.029 49.6668 70.9252 51.5684C68.8215 53.47 67.485 56.0884 67.1714 58.9231H56.8311C56.5175 56.088 55.1807 53.4692 53.0764 51.5675C50.9721 49.6659 48.248 48.6148 45.425 48.6154H26.1954L37.8439 35.8905ZM73.475 78.25V60.2115C73.475 58.8447 74.0123 57.5338 74.9688 56.5672C75.9252 55.6007 77.2224 55.0577 78.575 55.0577H101.525C102.728 55.0571 103.892 55.4861 104.812 56.2688L105.439 56.9543C105.585 57.1175 105.719 57.2876 105.84 57.4645C106.337 58.2582 106.625 59.2014 106.625 60.2115V78.25C106.625 79.6036 106.361 80.944 105.849 82.1946C105.336 83.4452 104.585 84.5815 103.637 85.5386C102.69 86.4958 101.566 87.2551 100.328 87.7731C99.0909 88.2911 97.7645 88.5577 96.425 88.5577H83.675C80.9698 88.5577 78.3754 87.4717 76.4625 85.5386C74.5496 83.6056 73.475 80.9838 73.475 78.25ZM50.525 60.2115V78.25C50.525 80.9838 49.4504 83.6056 47.5375 85.5386C45.6246 87.4717 43.0302 88.5577 40.325 88.5577H27.575C24.8698 88.5577 22.2754 87.4717 20.3625 85.5386C18.4496 83.6056 17.375 80.9838 17.375 78.25V60.2115C17.375 59.2014 17.6632 58.2582 18.1604 57.4645C18.2811 57.2859 18.4146 57.1158 18.5608 56.9543L19.188 56.2688C20.0754 55.5138 21.2229 55.0577 22.475 55.0577H45.425C46.7776 55.0577 48.0748 55.6007 49.0312 56.5672C49.9877 57.5338 50.525 58.8447 50.525 60.2115Z"
                    fill="white"
                  />
                </svg>
              </div>
            </div>
            <div class="number-circle">3</div>
            <h5 class="font-weight-bold">إدارة سهلة</h5>
            <p>
              بفضل لوحة التحكم البديهية، يمكن للمدربين والإداريين إدارة المحتوى
              التعليمي وتتبع تقدم الموظفين بسهولة وكفاءة.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center align-items-center">
      <a href="{{ route('CompanyRegistration') }}" class="btn btn-custom my-4">اشترك معنا</a>
    </div>

    <!-- رابط مكتبة Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>