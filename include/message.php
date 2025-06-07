
<section>
    <div>
        <p><a href=<?php echo $whatsapp; ?> target="_blank" rel="noopener noreferrer"><img src="assets/whatsapp.png" alt="WhatsApp Icon" class="whatsapp-style"></a></p>
        <p><a href="tel:<?php echo $mobile; ?>"><img src="assets/phone.png" alt="Phone Icon" class="phone-style"></a></p>
    </div>
</section>


    <style>
        .whatsapp-style {
            position: fixed;
            top: 73.6vh;
            left: 78.6rem;
            height: 4rem;
            animation: animate 1s linear infinite;
            border-radius: 50%;
            cursor: pointer;
            z-index:1000;
        }

        .phone-style {
            position: fixed;
            top: 60vh;
            left: 78.6rem;
            height: 4rem;
            animation: animate_1 1s linear infinite;
            border-radius: 50%;
            cursor: pointer;
            z-index:1000;
        }

        @keyframes animate {
            0% {
                box-shadow: 0 0 0 0 rgba(29, 145, 6, 0.7), 0 0 0 0 rgba(255, 109, 74, 0.7);
            }

            10% {
                box-shadow: 0 0 0 10px rgba(29, 145, 6, 0.4), 0 0 0 5px rgba(255, 109, 74, 0.4);
            }

            20% {
                box-shadow: 0 0 0 20px rgba(29, 145, 6, 0.2), 0 0 0 10px rgba(255, 109, 74, 0.2);
            }

            30% {
                box-shadow: 0 0 0 30px rgba(29, 145, 6, 0.1), 0 0 0 15px rgba(255, 109, 74, 0.1);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(29, 145, 6, 0), 0 0 0 0 rgba(255, 109, 74, 0);
            }
        }

        @keyframes animate_1 {
            0% {
                box-shadow: 0 0 0 0 rgba(1, 135, 241, 0.7), 0 0 0 0 rgba(255, 109, 74, 0.7);
            }

            10% {
                box-shadow: 0 0 0 10px rgba(1, 135, 241, 0.4), 0 0 0 5px rgba(255, 109, 74, 0.4);
            }

            20% {
                box-shadow: 0 0 0 20pxrgba(1, 135, 241, 0.2), 0 0 0 10px rgba(255, 109, 74, 0.2);
            }

            30% {
                box-shadow: 0 0 0 30px rgba(1, 135, 241, 0.1), 0 0 0 15px rgba(255, 109, 74, 0.1);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(1, 135, 241, 0), 0 0 0 0 rgba(255, 109, 74, 0);
            }
        }
    </style>