<?php /* Template name: About */ ?>

<?php get_header();
the_post(); ?>
<section class="about-page">
    <section id="biography-block" class="scrollmagic-block md-container biography-block">
        <h1 class="xlTitle">Hi, I'm Alicia</h1>

            <svg class="distort" width="550" height="850" viewBox="0 0 350 450">
                <filter id="distortionFilter">
                    <feTurbulence type="fractalNoise" baseFrequency="0.01 0.003" numOctaves="5" seed="200" stitchTiles="noStitch" x="0%" y="0%" width="100%" height="100%" result="noise"/>
                    <feDisplacementMap in="SourceGraphic" in2="noise" scale="0" xChannelSelector="R" yChannelSelector="B" x="0%" y="0%" width="100%" height="100%" filterUnits="userSpaceOnUse"/>
                </filter>
                <g filter="url(#distortionFilter)">
						
                <image class="distort__img" x="50" y="50" href="https://images.unsplash.com/photo-1550682290-d071c75759f9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" height="350" width="250"/>	
                <image class="distort__img" x="50" y="50" href="https://images.unsplash.com/photo-1548672194-7b98c9cb246d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" height="350" width="250"/>
                <image class="distort__img" x="50" y="50" href="https://images.unsplash.com/photo-1572727984721-9e8bbd728f0d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" height="350" width="250"/>
                <image class="distort__img" x="50" y="50" href="https://images.unsplash.com/photo-1552840253-b19267dbe6fc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" height="350" width="250"/>
                <image class="distort__img" x="50" y="50" href="https://images.unsplash.com/photo-1527605158555-853f200063e9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=619&q=80" height="350" width="250"/>
			    </g>
			</svg>
				
        
        <div class="magic-text">
            <p>I’m a  <a href="#" class="magic-text__link">UI · UX designer</a> and junior frontend developer who enjoys learning every single day. When I’m not designing or coding, I’m usually <a href="#" class="magic-text__link">belly dancing</a>, planning a trip or <a href="#" class="magic-text__link">reading a book</a>. One of my best experience in life was camping in <a href="#" class="magic-text__link">Norway</a> the most breathtaking place where I’ve ever been…  and one of my dreams is to <a href="#" class="magic-text__link">travel</a> around the world and live into a cabin!</p>
        </div>
			
    </section>

    <!-- TODO: Repeater & Loop -->
    <section id="experience-block" class="scrollmagic-block md-container experience-block" >
        <h2 class="lgTitle">Experience & Career</h2>

        <?php $dataStart = get_field( "about_dataStart" ); ?>
        <?php $dataEnd = get_field( "about_dataEnd" ); ?>
        <?php $job = get_field( "about_job" ); ?>
        <?php $company = get_field( "about_company" ); ?>
        <?php $companyWeb = get_field( "about_companyWeb" ); ?>

        <?php $dataStart2 = get_field( "about_dataStart2" ); ?>
        <?php $dataEnd2 = get_field( "about_dataEnd2" ); ?>
        <?php $job2 = get_field( "about_job2" ); ?>
        <?php $company2 = get_field( "about_company2" ); ?>
        <?php $companyWeb2 = get_field( "about_companyWeb2" ); ?>

        <?php $dataStart3 = get_field( "about_dataStart3" ); ?>
        <?php $job3 = get_field( "about_job3" ); ?>
        <?php $company3 = get_field( "about_company3" ); ?>
        <?php $companyWeb3 = get_field( "about_companyWeb3" ); ?>



        <div class="experience-block__box">
            <div class="experience-block__box-content">
                <div class="date">
                    <time class="mdText"><?php echo $dataStart; ?></time>
                    <time class="mdText">Currently</time>
                </div>
                <div class="data-job">
                    <p><?php echo $job; ?> in <br>
                    <a href="<?php echo $companyWeb; ?>" target="_blank"><?php echo $company; ?></a></p>
                </div>
            </div>
        </div>

        <div class="experience-block__box">
            <div class="experience-block__box-content">
                <div class="date">
                    <time class="mdText"><?php echo $dataStart3; ?></time>
                </div>
                <div class="data-job">
                    <p><?php echo $job3; ?><br>
                    <a href="<?php echo $companyWeb3; ?>" target="_blank"><?php echo $company3; ?></a></p>
                </div>
            </div>
        </div>

        <div class="experience-block__box">
            <div class="experience-block__box-content">
                <div class="date">
                    <time class="mdText"><?php echo $dataStart2; ?></time>
                    <time class="mdText"><?php echo $dataEnd2; ?></time>
                </div>
                <div class="data-job">
                    <p><?php echo $job2; ?> in <br>
                    <a href="<?php echo $companyWeb2; ?>" target="_blank"><?php echo $company2; ?></a></p>
                </div>
            </div>
        </div>

        <p class="smText">Take a peek to <a href="#" target="_blank">my curriculum!</a></p>

        
          
    </section>

    <section id="quiz-block" class="scrollmagic-block sm-container quiz-block">
        <h2 class="xlTitle">Let's <span class="xlTitle-border animated-text" data-shadow='play'>play</span></h2>
        <h3 class="mdText">10 questions to discover our compatibility at work & life</h3>

        <div class="quiz">
            <div id="startContainer" class="startContainer">
                <img class="color-img" src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/225/crystal-ball_1f52e.png">
                <button id="start-action" class="start-btn mdText">Start quiz</button>
            </div>

            <div id="quizContainer" class="quizContainer hidden">
                <div class="quizQuestion">
                    <form>
                        <h2 class="mdText" id="question-title"></h2>
                        <div id="answers" class="quizQuestion_answers">
                            <div class="answer-container"><input type="radio" name="answer" class="answer-item" id="answer-0"></input><label class="mdText" for="answer-0"></label><span class="feedback smText"></span></div>
                            <div class="answer-container"><input type="radio" name="answer" class="answer-item" id="answer-1"></input><label class="mdText" for="answer-1"></label><span class="feedback smText"></span></div>
                            <div class="answer-container"><input type="radio" name="answer" class="answer-item" id="answer-2"></input><label class="mdText" for="answer-2"></label><span class="feedback smText"></span></div>
                        </div>
                    </form>
                </div>

                <button id="next-action" class="control-btn" disabled>Next</button>
            </div>
            <div id="resultsContainer" class="hidden">

            </div>
        </div>

    </section>
</section>


<?php get_footer(); ?>