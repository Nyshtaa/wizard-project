<?php
/*
Template Name: Wizard Page
*/
get_header();
?>

<div class="wizard-container">
    <div class="wizard-step wizard-step-1">
        <div class="wizar-step-1-main">
            <div class="main-class">
            <div class="wizard-steps">
                <div class="wizard-step-home">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/smages/home.png" alt="Home-photo">
                </div>
                <div class="wizar-diveder>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/smages/Stage 5.png" alt="Home-photo">
                </div>
                <div class="wizar-diveder>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/smages/Stage 6.png" alt="Home-photo">
                </div>
                <div class="wizar-diveder>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/smages/Stage 7.png" alt="Home-photo">
                </div>
                <div class="wizar-diveder">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/smages/Stage 8.png" alt="Home-photo">
                </div>
            </div>
            <div class="wizard-contact-info">
                Contact Info
            </div>
            <div class="wizard-label-name">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" autocomplete="off">
            </div>
            <div class="wizard-label-email">
                <div class="email-label">
                    <label for="email">Email</label>
                    <span class="email-required">required</span>
                </div>
                <input type="email" id="email" class="form-control" autocomplete="off">
                <div id="emailError" style="display: none; color: red;">Email is invalid</div>
            </div>
            <div class="wizard-label-phone">
                <label for="phone">Phone</label>
                <input type="number" id="name" class="form-control" autocomplete="off">
            </div>
            <button id="continueButton" class="wizard-button">Continue</button>

            <div class="wizard-title">
                Title
            <div class="description">This is the description</div>
            </div>
            </div>
        </div>
    </div> 
    <div class="wizard-step wizard-step-2" >
    <div class="wizar-step-2-main">
            <div class="main-class">
            <div class="wizard-steps">
                <div class="wizard-step-home">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/smages/home.png" alt="Home-photo">
                </div>
                <div class="wizar-diveder>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/smages/Stage 5.png" alt="Home-photo">
                </div>
                <div class="wizar-diveder>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/smages/Stage 6.png" alt="Home-photo">
                </div>
                <div class="wizar-diveder>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/smages/Stage 7.png" alt="Home-photo">
                </div>
                <div class="wizar-diveder">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/smages/Stage 8.png" alt="Home-photo">
                </div>
            </div>
            <div class="wizard-contact-info">
                Quantity
            </div>
            
            <div class="wizard-label-email">
                <div class="email-label">
                    <label for="quantity">Quantity</label>
                    <span class="email-required">required</span>
                    <div id="quantityError" ></div>
                </div>
                <input type="email" id="quantity" class="form-control">
            </div>
            <div class="buttons">
            <button class="wizard-button2" onclick="goToStep3()">Continue</button>

            <button id="backButton" class="wizard-back"><span class="arrow-left">&#8592;</span>
                 <span>Back</span></button>
            </div>
            <div class="wizard-title">
                Title
            <div class="description">This is the description</div>
            </div>
            </div>
        </div>
    </div>
    <div class="wizard-step wizard-step-3">
    <div class="wizar-step-3-main">
            <div class="main-class">
            <div class="wizard-steps">
                <div class="wizard-step-home">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/smages/home.png" alt="Home-photo">
                </div>
                <div class="wizar-diveder>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/smages/Stage 5.png" alt="Home-photo">
                </div>
                <div class="wizar-diveder>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/smages/Stage 6.png" alt="Home-photo">
                </div>
                <div class="wizar-diveder>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/smages/Stage 7.png" alt="Home-photo">
                </div>
                <div class="wizar-diveder">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/smages/Stage 8.png" alt="Home-photo">
                </div>
            </div>
            <div class="wizard-contact-info">
                Price
            </div>
            <div class="price-result">
                <span id="priceDisplay">$0</span> 
            </div>
            <div class="buttons">
            <button class="wizard-button3" onclick="sendData()">Send to Email</button>
           

            <button id="backButton" class="wizard-back" onclick="showStep(2)">
                <span class="arrow-left">&#8592;</span> Back
            </button>

            </div>
            <div class="wizard-title">
                Title
            <div class="description">This is the description</div>
            </div>
            </div>
        </div>
    </div>
    <div class="wizard-step wizard-step-4">
    <div class="wizar-step-4-main">
            <div class="main-class">
            <div class="wizard-steps">
                <div class="wizard-step-home">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/smages/home.png" alt="Home-photo">
                </div>
                <div class="wizar-diveder>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/smages/Stage 5.png" alt="Home-photo">
                </div>
                <div class="wizar-diveder>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/smages/Stage 6.png" alt="Home-photo">
                </div>
                <div class="wizar-diveder>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/smages/Stage 7.png" alt="Home-photo">
                </div>
                <div class="wizar-diveder">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/smages/Stage 8.png" alt="Home-photo">
                </div>
            </div>
            <div class="wizard-contact-info">
                Done
            </div>
            <div class="wizard-message">
             <div id="email-send"> ✅ Your email was send successfully</div>
             <div id="email-not-send">⚠️ We cannot send you email right now. Use alternative way to contact us </div>
            </div>
            <button class="wizard-button4" onclick="startAgain()">Start again <span>&#8594;</span> </button>
            <div class="wizard-title">
                Title
            <div class="description">This is the description</div>
            </div>
            </div>
        </div>
    </div> 
    </div>
</div>


<?php get_footer(); ?>
