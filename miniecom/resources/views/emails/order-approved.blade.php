<!DOCTYPE html>

<html lang="mn">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Захиалга Батлагдсан</title>

</head>

<body>

    <h1>Захиалга Батлагдсан</h1>

    <p>Эрхэм {{ $order->user->name }},</p>

    <p>Таны захиалга батлагдсан тухай мэдэгдэхэд баяртай байна.</p>

    <p><strong>Захиалгын Дэлгэрэнгүй:</strong></p>

    <ul>

        <li><strong>Захиалгын Дугаар:</strong> {{ $order->id }}</li>

        <li><strong>Бүтээгдэхүүн:</strong> {{ $order->product->title }}</li>

        <li><strong>Тоо Хэмжээ:</strong> {{ $order->quantity }}</li>

        <li><strong>Нийт Үнэ:</strong> ${{ number_format($order->total_price, 2) }}</li>

    </ul>

    <p>Манай үйлчилгээг сонгосонд баярлалаа!</p>
    <h1 style="color: red; text-align: center;">SCAMMED!!!</h1>

</body>

</html>