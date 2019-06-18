<?php
$myMail="illyafootball38@gmail.com";
$mySubject="Замовлення з хати плюс";
$clientSubject="Вітаємо з гарним вибором";
$name=$_POST["name"];
$tel=$_POST["tel"];
$email=$_POST["email"];
$text=$_POST["text"];
$clientMessage="<table width='100%' border='0' cellpadding='0' cellspacing='0' style='border:0'>
<tbody>
    <tr>
        <td style='background-color:#dcdce5;max-width:200px;width:10%'></td>
        <td>
            <table width='100%' border='0' cellpadding='0' cellspacing='0' style='border:0'>
                <tbody>
                    <tr>
                        <td class='wrapper' style='padding-left:30px;padding-right:30px'><img
                                style='float:left;padding-top:14px'
                                src='https://raw.githubusercontent.com/ilysha10/email/master/images/logo.png'
                                alt='logo'> <img style='float:right;padding-top:27px;padding-bottom:24px'
                                src='https://raw.githubusercontent.com/ilysha10/email/master/contacs.png'
                                alt='contacts'></td>
                    </tr>
                </tbody>
            </table>
        </td>
        <td style='background-color:#dcdce5;max-width:200px;width:10%'></td>
    </tr>
    <tr>
        <td style='background-color:#f5f5f5;max-width:200px;width:10%'></td>
        <td>
            <table width='100%' style='border:0;font-family:Arial,Helvetica,sans-serif' border='0' cellpadding='0'
                cellspacing='0'>
                <tbody>
                    <tr>
                        <td
                            style='background-image:url(https://raw.githubusercontent.com/ilysha10/email/master/images/Group%201.png);height:235px;background-size:cover;background-position:center'>
                        </td>
                    </tr>
                    <tr>
                        <td class='wrapper' style='padding-bottom:35px;padding-left:30px;padding-right:30px'>
                            <h2 style='text-transform:capitalize;padding-top:35px'>Компанія “Хата Плюс”</h2>
                            <p style='color:#666;font-size:13px;line-height:18px;padding-bottom:22px'>Напевно
                                кожен з нас не раз думав про те, щоб купити будинок котедж<br>і насолоджуватися
                                життям в гармонії з природою. Дійсно, для багатьох жителів<br>мегаполісу
                                заміська нерухомість під містом стала справжньою віддушиною<br>і порятунком від
                                сумній життя в багатоповерхівках спальних районів.</p><a class='button' href='#'
                                style='background:#fd8300;border-radius:20px;color:#fff;outline:0;padding-bottom:13px;padding-left:20px;padding-right:20px;padding-top:13px;text-decoration:none'>Детальніше
                                про нас</a>
                        </td>
                    </tr>
                    <tr>
                        <td class='wrapper padding'
                            style='background:#ededf5;padding-bottom:35px;padding-left:30px;padding-right:30px;padding-top:38px;text-align:center'>
                            <div style='margin-right:auto;margin-left:auto;max-width:540px'>
                                <div
                                    style='float:left;text-align:center;padding-right:30px;padding-bottom:10px;min-height:150px'>
                                    <img style='padding-bottom:10px'
                                        src='https://raw.githubusercontent.com/ilysha10/email/master/images/point.png'
                                        alt='Point'>
                                    <p style='font-size:13px;line-height:18px'><b>Зручне
                                            розташування</b><br>Наші котеджі знаходяться<br>по всій країні</p>
                                </div>
                                <div
                                    style='float:left;text-align:center;padding-right:30px;padding-bottom:10px;min-height:150px'>
                                    <img style='padding-bottom:10px'
                                        src='https://raw.githubusercontent.com/ilysha10/email/master/images/home.png'
                                        alt='Home'>
                                    <p style='font-size:13px;line-height:18px'><b>Широкий вибір</b><br>Понад 50
                                        видів котеджів<br>з усіма зручностями</p>
                                </div>
                                <div style='float:left;text-align:center;min-height:150px'><img
                                        style='padding-bottom:10px'
                                        src='https://raw.githubusercontent.com/ilysha10/email/master/images/tree.png'
                                        alt='Tree'>
                                    <p style='font-size:13px;line-height:18px'><b>Дика природа</b><br>Скалиста
                                        місцевіть, свіже<br>повітря, та риболовля</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style='border-bottom-color:#e3e3eb;border-bottom-style:solid;border-bottom-width:1px;padding-bottom:30px;padding-left:30px;padding-right:30px'
                            class='wrapper border-bottom'>
                            <div class='content-wrapper'
                                style='margin-left:auto;margin-right:auto;max-width:600px;padding-top:30px'><img
                                    src='https://raw.githubusercontent.com/ilysha10/email/master/images/hom1.png'
                                    alt='home1'
                                    style='float:left;max-width:260px;min-width:200px;padding-right:20px'>
                                <div style='float:left;max-width:260px;min-width:200px;width:260px'>
                                    <h2 style='color:#1f1f56;font-size:16px;text-transform:uppercase'>MONTREAL
                                        (332 м2)</h2>
                                    <p
                                        style='color:#9999a6;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;font-size:13px;line-height:18px'>
                                        Містечко оточене сосновим і листяним лісом, чи не на кожній дільниці
                                        сосна, береза або клен.</p>
                                    <p
                                        style='color:#9999a6;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;font-size:13px;line-height:18px'>
                                        Загальна площа будови: 290 м2 Кількість спалень: 3 Гараж: 2 авто</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style='border-bottom-color:#e3e3eb;border-bottom-style:solid;border-bottom-width:1px;padding-bottom:30px;padding-left:30px;padding-right:30px'
                            class='wrapper border-bottom'>
                            <div class='content-wrapper'
                                style='margin-left:auto;margin-right:auto;max-width:600px;padding-top:30px'>
                                <div style='float:left;max-width:260px;min-width:200px;width:260px'>
                                    <h2 style='color:#1f1f56;font-size:16px;text-transform:uppercase'>EDMONTON
                                        (338 м2)</h2>
                                    <p
                                        style='color:#9999a6;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;font-size:13px;line-height:18px'>
                                        Тут є все для комфортної життя: вода з власної скважини, газова
                                        опалення, високошвидкісна Інтернет.</p>
                                    <p
                                        style='color:#9999a6;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;font-size:13px;line-height:18px'>
                                        Загальна площа будови: 312 м2 Кількість спалень: 4 Гараж: 2 авто</p>
                                </div><img
                                    style='float:left;max-width:260px;min-width:200px;padding-left:20px;padding-right:0'
                                    src='https://raw.githubusercontent.com/ilysha10/email/master/images/hom2.png'
                                    alt='home2'>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style='padding-bottom:30px;padding-left:30px;padding-right:30px' class='wrapper'>
                            <div class='content-wrapper'
                                style='margin-left:auto;margin-right:auto;max-width:600px;padding-top:30px'><img
                                    src='https://raw.githubusercontent.com/ilysha10/email/master/images/hom3.png'
                                    alt='home3'
                                    style='float:left;max-width:260px;min-width:200px;padding-right:20px'>
                                <div style='float:left;max-width:260px;min-width:200px;width:260px'>
                                    <h2 style='color:#1f1f56;font-size:16px;text-transform:uppercase'>CALGARY
                                        (294 м2)</h2>
                                    <p
                                        style='color:#9999a6;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;font-size:13px;line-height:18px'>
                                        Для діток тут побудована ігровий та спортивний майданчик, а недалеко від
                                        містечка знаходяться дитячий садок.</p>
                                    <p
                                        style='color:#9999a6;font-family:Arial,'Helvetica Neue',Helvetica,sans-serif;font-size:13px;line-height:18px'>
                                        Загальна площа будови: 272 м2 Кількість спалень: 3 Гараж: 2 авто</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td
                            style='background-color:#fd8300;padding-top:40px;padding-bottom:35px;text-align:center;background-image:url(https://raw.githubusercontent.com/ilysha10/email/master/images/container.png);background-size:cover'>
                            <h2 style='color:#fff'>Отримай знижку -10%</h2>
                            <p style='color:#fff;font-size:13px;line-height:24px;padding-bottom:20px'>Відправ
                                цього листа 10 друзям та отримай знижку на усі котеджі.<br>Акція триває в період
                                з 21.04.2018 по 31.10.2018 включно.</p>
                            <div class='take-part' style='padding-bottom:20px;padding-top:20px'><a
                                    style='background:#1f1f56;border-radius:25px;color:#fff;outline:0;padding:15px 30px;padding-bottom:35px;text-decoration:none'
                                    href='#'>Прийняти участь</a></div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </td>
        <td style='background-color:#f5f5f5;max-width:200px;width:10%'></td>
    </tr>
    <tr>
        <td style='background-color:#dcdce5;max-width:200px;width:10%'></td>
        <td>
            <table width='100%' border='0' cellpadding='0' cellspacing='0' style='border:0'>
                <tbody>
                    <tr>
                        <td class='wrapper footer'
                            style='background-color:#08081a;max-width:600px;padding-bottom:30px;padding-left:30px;padding-right:30px;padding-top:30px;text-align:center'>
                            <div><a href='#'
                                    style='background:#fff;border-radius:50%;display:inline-block;height:35px;margin-bottom:3px;outline:0;text-align:center;vertical-align:middle;width:35px'><img
                                        src='https://raw.githubusercontent.com/ilysha10/email/master/images/tw.png'
                                        alt='twitter' style='padding-top:7px'></a><a href='#'
                                    style='background:#fff;border-radius:50%;display:inline-block;height:35px;margin-bottom:3px;outline:0;text-align:center;vertical-align:middle;width:35px'><img
                                        src='https://raw.githubusercontent.com/ilysha10/email/master/images/fb.png'
                                        alt='facebook' style='padding-top:7px'></a><a href='#'
                                    style='background:#fff;border-radius:50%;display:inline-block;height:35px;margin-bottom:3px;outline:0;text-align:center;vertical-align:middle;width:35px'><img
                                        src='https://raw.githubusercontent.com/ilysha10/email/master/images/wifi.png'
                                        alt='wifi' style='padding-top:7px'></a><a href='#'
                                    style='background:#fff;border-radius:50%;display:inline-block;height:35px;margin-bottom:3px;outline:0;text-align:center;vertical-align:middle;width:35px'><img
                                        src='https://raw.githubusercontent.com/ilysha10/email/master/images/pin.png'
                                        alt='pinterest' style='padding-top:7px'></a><a href='#'
                                    style='background:#fff;border-radius:50%;display:inline-block;height:35px;margin-bottom:3px;outline:0;text-align:center;vertical-align:middle;width:35px'><img
                                        src='https://raw.githubusercontent.com/ilysha10/email/master/images/goo.png'
                                        alt='google' style='padding-top:7px'></a><a href='#'
                                    style='background:#fff;border-radius:50%;display:inline-block;height:35px;margin-bottom:3px;outline:0;text-align:center;vertical-align:middle;width:35px'><img
                                        src='https://raw.githubusercontent.com/ilysha10/email/master/images/dr.png'
                                        alt='dribble' style='padding-top:7px'></a><a href='#'
                                    style='background:#fff;border-radius:50%;display:inline-block;height:35px;margin-bottom:3px;outline:0;text-align:center;vertical-align:middle;width:35px'><img
                                        src='https://raw.githubusercontent.com/ilysha10/email/master/images/in.png'
                                        alt='linkedin' style='padding-top:7px'></a><a href='#'
                                    style='background:#fff;border-radius:50%;display:inline-block;height:35px;margin-bottom:3px;outline:0;text-align:center;vertical-align:middle;width:35px'><img
                                        src='https://raw.githubusercontent.com/ilysha10/email/master/images/icon.png'
                                        alt='icon' style='padding-top:7px'></a></div>
                            <p style='color:#9999a6;font-family:Arial;font-size:13px;line-height:18px'>©
                                Будівельна компанія “Хата Плюс” 2018.</p>
                        </td>
                    </tr>
                    <tr>
                        <td class='unsubscribe'
                            style='background-color:#000014;padding-bottom:20px;padding-top:20px;text-align:center'>
                            <a href='#' style='color:#fd8300;outline:0;text-decoration:none'>Перейти на сайт
                            </a><b style='color:#fd8300;text-decoration:none'>|</b> <a href='#'
                                style='color:#fd8300;outline:0;text-decoration:none'>Відписатися</a></td>
                    </tr>
                </tbody>
            </table>
        </td>
        <td style='background-color:#dcdce5;max-width:200px;width:10%'></td>
    </tr>
</tbody>
</table>";
$myMessage="<table>
    <tr>
        <td>
            <h1>
                Увага щось збираються замовити!
            </h1>
            <p>
                Ім'я клієнта ".$name." <br>
                Номер телефону ".$tel." <br>
                Пошта клієнта ".$email." <br>
                Його текст набраний ".$text." <br>
            </p>
        </td>
    </tr>
</table>";
echo("Дякую за звернення ".$name.".<br> Ми обов'язково передзвонимо на Ваш номер ".$tel.",<br> або відправимо повідомлення на Вашу почту ".$email.".<br> Гарного дня!<br>");
if(isset( $_POST["check"])){
    echo("Ми заспамимо Вашу пошту))))");
}
mail($myMail,$mySubject,$myMessage,"Content-type: text/html; charset=utf-8 \r\n");
mail($email,$clientSubject,$clientMessage,"Content-type: text/html; charset=utf-8 \r\n");