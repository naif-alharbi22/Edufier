<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نموذج التسجيل</title>
    <style>
        /* إعدادات عامة */
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            direction: rtl; /* تغيير اتجاه النص */
        }

        /* إعدادات الحاوية الرئيسية */
        .container {
            max-width: 400px;
            margin: 40px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-input {
            width: 100%;
            padding: 10px 0;
            border: none;
            border-bottom: 2px solid #ccc;
            background: transparent;
            font-size: 14px;
            color: #333;
            outline: none;
            transition: border-color 1s;
        }

        .form-input:focus {
            border-color: #9B72CF;
        }

        .form-label {
            position: absolute;
            right: 0; /* تغيير موضع label */
            top: 10px;
            color: #888;
            font-size: 14px;
            transition: 0.3s ease;
        }

        .form-input:focus + .form-label,
        .form-input:not(:placeholder-shown) + .form-label {
            top: -16px;
            font-size: 12px;
            color: #9B72CF;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            font-size: 14px;
            color: #888;
            margin-bottom: 12px;
        }

        .submit-btn {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            color: #fff;
            background: linear-gradient(
                92.6deg,
                #9b72cf -3.9%,
                rgba(155, 114, 207, 0.576446) 69.38%,
                rgba(155, 114, 207, 0.18) 137.98%
              );
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #e572bd;
        }
        img {
            width: 30%;
            height: 30%;
            text-align: center;
            display: block;
            margin: auto;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <!-- start form -->
    <div class="container">
        <form id="registrationForm" action="{{ route('company.data.store') }}" method="POST" class="form">
        @csrf
            <img src="{{ asset('images/iiiiiiiiiimage.png') }}" alt="">
            <div class="form-group">
                <input
                    type="text"
                    name="companyName"
                    id="company_name"
                    class="form-input"
                    placeholder=" "
                    required
                />
                <label for="company_name" class="form-label">اسم الشركة</label>
            </div>

            <div class="form-group">
                <input
                    type="text"
                    name="relationshipManager"
                    id="relationship_manager"
                    class="form-input"
                    placeholder=" "
                    required
                />
                <label for="relationship_manager" class="form-label">موظف العلاقات</label>
            </div>

            <div class="form-group">
                <input
                    type="tel"
                    name="phoneNumber"
                    id="phone_number"
                    class="form-input"
                    placeholder=" "
                    
                />
                <label for="phone_number" class="form-label">رقم الهاتف (123-456-7890)</label>
            </div>

            <div class="form-group">
                <input
                    type="email"
                    name="email"
                    id="email_address"
                    class="form-input"
                    placeholder=" "
                    required
                />
                <label for="email_address" class="form-label">البريد الإلكتروني</label>
            </div>

            <div class="checkbox-group">
                <input type="checkbox" name="previousKnowledge" id="previous_knowledge" style="margin-right: 8px;" />
                <label for="previous_knowledge">هل أنت مهتم بنقل المعرفة؟</label>
            </div>

            <button type="submit" class="submit-btn">
                سجل عرضك الآن
            </button>
        </form>
    </div>
</body>
</html>