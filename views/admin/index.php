<?php
$header = [
    'No',
    'Yengil mashinalar',
    'Yuk mashinalari',
    'Motosikllar',
    'Tramvay',
    'Metro',
    'Poezd',
];

$data = [
    1 => ['rul', 'balon', 'old-fara', 'orqa-fara', 'diska', 'chexol'],
    2 => ['akkumulyator', 'motor', 'moy', 'diska', 'balon', 'boshqalar'],
    3 => ['chexol', 'kamera', 'orindiq', 'moy', 'akkumulyator', 'boshqalar'],
    4 => ['signal', 'kamera', 'orindiq', 'moy', 'old-fara', 'boshqalar'],
    5 => ['akkumulyator', 'motor', 'orindiq', 'moy', 'old-fara', 'boshqalar'],
    6 => ['old-fara', 'kamera', 'orqa-fara', 'motor', 'akkumulyator', 'boshqalar'],
    7 => ['motor', 'chexol', 'rul', 'moy', 'old-fara', 'boshqalar'],
    8 => ['signal', 'motor', 'akkumulyator', 'orindiq', 'orqa-fara', 'boshqalar'],
    9 => ['motor', 'kamera', 'akkumulyator', 'moy', 'moy', 'boshqalar'],
    10 => ['yon-oyna', 'motor', 'orindiq', 'signal', 'orqa-fara', 'boshqalar'],
];

?>
<table class="table">
    <thead>
    <tr>
        <?php foreach ($header as $value): ?>
            <th scope="col"><?= $value ?></th>
        <? endforeach; ?>
    </tr>
    </thead>
    <tbody>
    <? foreach ($data as $key => $value): ?>
        <tr>
            <th scope="row"><?= $key ?></th>
            <td><?= $value[0] ?></td>
            <td><?= $value[1] ?></td>
            <td><?= $value[2] ?></td>
            <td><?= $value[3] ?></td>
            <td><?= $value[4] ?></td>
            <td><?= $value[5] ?></td>
        </tr>
    <? endforeach; ?>
    </tbody>
</table>

<iframe
        src="https://images8.alphacoders.com/903/thumb-1920-903199.png"
        frameborder="0"
        width="100%"
        height="300"
        scrolling="no"
></iframe>

<video
        src="/web/video/City.mp4"
        loop
        controls
        width="100%"
        height="400"
></video>


<audio
        src="/web/video/City.mp4"
        controls
        width="100%"
        height="400"
></audio>
<div class="container">
    <ul class="mainList">
        <li type="none">royxat elenti</li>
        <li type="square">royxat elenti</li>
        <li type="circle">royxat elenti</li>
        <li type="disc">royxat elenti</li>
    </ul>
</div>

<div class="registerPage">

    <div class="informationBlock">

        <h3 class="informationBlock_title">Start your journey to a better life with online practical courses</h3>
        <div class="informationBlock_items">
            <div class="icons">
                <i class="fa fa-users fa-3x"></i>
            </div>
            <div class="text">
                <h3 class="title">International Certifications</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad asperiores atque commodi debitis dicta
                ipsam labore, nobis reiciendis reprehenderit voluptas!
            </div>
        </div>

        <div class="informationBlock_items">
            <div class="icons">
                <i class="fa fa-circle-o fa-3x"></i>
            </div>
            <div class="text">
                <h3 class="title">Free for 3 month</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad asperiores atque commodi debitis dicta
                ipsam labore, nobis reiciendis reprehenderit voluptas!
            </div>
        </div>
        <div class="informationBlock_items">
            <div class="icons">
                <i class="fa fa-universal-access fa-3x"></i>
            </div>
            <div class="text">
                <h3 class="title">Professional treniers</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad asperiores atque commodi debitis dicta
                ipsam labore, nobis reiciendis reprehenderit voluptas!
            </div>
        </div>
    </div>

    <div class="registerForm">
        <h5 class="registerForm_title">Sign Up today</h5>
        <form action="/web/admin/index.aspx" class="formRegsiter">
            <input type="text" placeholder="First name">
            <input type="email" placeholder="Your email address">
            <input type="password" placeholder="Your Password">
            <input type="submit" class="submitButton">
        </form>
    </div>

</div>
