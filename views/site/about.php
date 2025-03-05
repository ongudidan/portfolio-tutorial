<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="about">

    <h1 class="heading"> about <span>me</span> </h1>

    <div class="row">

        <div class="info-container">

            <h1>personal info</h1>

            <div class="box-container">

                <div class="box">
                    <h3> <span>name : </span> <?= $aboutModel->name ?? '' ?> </h3>
                    <h3> <span>age : </span> <?= $aboutModel->age ?? '' ?> </h3>
                    <h3> <span>email : </span> <?= $aboutModel->email ?? '' ?> </h3>
                    <h3> <span>address : </span><?= $aboutModel->address ?? '' ?> </h3>
                </div>

                <div class="box">
                    <h3> <span>freelance : </span> <?= $aboutModel->freelance_status ?? '' ?> </h3>
                    <h3> <span>skill : </span> <?= $aboutModel->skill ?? '' ?> </h3>
                    <h3> <span>experience : </span> <?= $aboutModel->experience ?? '' ?> </h3>
                    <h3> <span>language : </span> <?= $aboutModel->language ?? '' ?></h3>
                </div>
            </div>

            <a target="_blank" href="https://#" class="btn"> download CV <i
                    class="fas fa-download"></i> </a>

        </div>
        <div class="count-container">
            <div class="box">
                <h3><?= $aboutModel->years_of_experience ?? '' ?> Years+</h3>
                <p>years of experience</p>
            </div>

            <div class="box">
                <h3><?= $aboutModel->happy_clients ?? '' ?>+</h3>
                <p>happy clients</p>
            </div>

            <div class="box">
                <h3><?= $aboutModel->projects ?? '' ?>+</h3>
                <p>project completed</p>
            </div>

            <div class="box">
                <h3><?= $aboutModel->awards ?? '' ?>+</h3>
                <p>awards won</p>
            </div>
        </div>
    </div>
</section>

<section class="skills">
    <h1 class="heading"> <span>my</span> skills </h1>
    <div class="box-container">
        <div class="box">
            <img src="/web/storage/icon-1.png">
            <h3>html</h3>
        </div>
        <div class="box">
            <img src="/web/storage/icon-2.png">
            <h3>css</h3>
        </div>
        <div class="box">
            <img src="/web/storage/icon-3.png">
            <h3>javascript</h3>
        </div>
        <!-- <div class="box">
            <img src="/web/storage/icon-4.png">
            <h3>sass</h3>
        </div> -->
        <div class="box">
            <img src="/web/storage/icon-5.png">
            <h3>jquery</h3>
        </div>
        <!-- <div class="box">
            <img src="/web/storage/icon-6.png">
            <h3>react.js</h3>
        </div> -->
    </div>

</section>

<section class="education">
    <h1 class="heading"> <span>my</span> education </h1>
    <div class="box-container">
        <?php foreach ($educationModel as $row): ?>
            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span><?= $row->year ?? '' ?></span>
                <h3><?= $row->title ?? '' ?></h3>
                <p><?= $row->description ?? '' ?></p>
            </div>
        <?php endforeach; ?>
        <!-- <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <span>2015-2018</span>
            <h3>High School Education at Kwale High School</h3>
            <p>I attended Kwale High School, where I completed my Kenya Certificate of Secondary Education (KCSE) with a Grade B. During my time at Kwale High, I developed critical thinking, problem-solving skills, and a strong work ethic that continue to influence my academic and professional pursuits.</p>
        </div>
        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <span>2019-2025</span>
            <h3>Bachelor of Science in Information Technology at Maseno University</h3>
            <p>I am currently pursuing a Bachelor of Science in Information Technology at Maseno University, where I am gaining in-depth knowledge in computer science, software development, and IT infrastructure. This program is equipping me with the technical skills and problem-solving abilities necessary to thrive in the ever-evolving tech industry. My time at Maseno University has been marked by hands-on projects, collaborative learning, and a passion for innovation.</p>
        </div>
        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <span>May 2024 – Aug 2024</span>
            <h3>Attachment at Technical University of Mombasa</h3>
            <p>During my attachment at the IT Department of the Technical University of Mombasa, I gained practical experience in various IT-related tasks, including network management, system maintenance, and technical support. I worked alongside a team of professionals, assisting with troubleshooting hardware and software issues, managing user accounts, and ensuring the smooth operation of IT systems. This hands-on experience allowed me to apply theoretical knowledge from my studies, while also enhancing my problem-solving and communication skills in a real-world environment.</p>
        </div> -->
    </div>
</section>