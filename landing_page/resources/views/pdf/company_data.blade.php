<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>بيانات الشركات</title>
</head>
<body>
    <h1>عدد البيانات في الجدول: {{ $count }}</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
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
</body>
</html>
