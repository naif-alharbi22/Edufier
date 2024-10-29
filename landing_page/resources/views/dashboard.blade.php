<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
       
        .custom-btn {
            background-color: #1e3a8a; 
            color: #fff;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
        }
        .custom-btn:hover {
            background-color: #1c6df5; 
            transform: scale(1.05); 
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Dashboard</h1>
        <div class="mb-4">
            <h5>عدد البيانات في الجدول: <span class="text-primary">{{ $count }}</span></h5>
        </div>
        <form action="{{ route('dashboard.export.pdf') }}" method="POST">
    @csrf
    <button type="submit" class="custom-btn">
        تحميل بيانات الجدول (PDF)
    </button>
</form>
        <table class="table table-bordered table-striped mt-4">
            <thead class="thead-dark">
                <tr>
                    <th>اسم الشركة</th>
                    <th>البريد الإلكتروني</th>
                    <th>رقم الهاتف</th>
                    <th>مدير العلاقات</th>
                    <th>معرفة سابقة</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companyData as $data)
                    <tr>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->nuber_phone }}</td>
                        <td>{{ $data->Relations_Officer }}</td>
                        <td>{{ $data->Knowledge_transfer ? 'نعم' : 'لا' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
