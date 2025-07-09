
name => oninput="this.value = this.value.replace(/[^a-zA-Z]/g, ' ').replace(/(\  *?)\  */g, '$1')"

email =>  oninput="validateEmail(this)"

mobile => type="text" id="mobile" maxlength="10" oninput="this.value = this.value.toUpperCase().replace(/[^0-9]/g, '').replace(/(\  *?)\  */g, '$1')"

Address => oninput="this.value = this.value.toLowerCase().replace(/[^a-z0-9,. ]/g, '').replace(/\s+/g, ' ');"

type="text" id="aadhar_card_no" maxlength="12" oninput="this.value = this.value.toUpperCase().replace(/[^0-9]/g, '').replace(/(\  *?)\  */g, '$1')"

type="text" id="pan_card" maxlength="10" oninput="validatePAN(this)" 

type="text" id="ifsc" oninput="validateIFSC(this)"
											

<script>
function validatePAN(input) {
let value = input.value.toUpperCase().replace(/[^A-Z0-9]/g, '');
let formattedValue = '';let lettersPart = value.slice(0, 5).replace(/[^A-Z]/g, '');
formattedValue += lettersPart;let digitsPart = value.slice(lettersPart.length, lettersPart.length + 4).replace(/[^0-9]/g, '');formattedValue += digitsPart;
if (formattedValue.length == 9) {let lastLetterPart = value.slice(lettersPart.length + digitsPart.length, lettersPart.length + digitsPart.length + 1).replace(/[^A-Z]/g, '');formattedValue += lastLetterPart; }input.value = formattedValue;
} function validateIFSC(input) {let value = input.value.toUpperCase().replace(/[^A-Z0-9]/g, '');
let formattedValue = '';let lettersPart = value.slice(0, 4).replace(/[^A-Z]/g, '');
formattedValue += lettersPart;let digitsPart = value.slice(lettersPart.length, lettersPart.length + 7).replace(/[^0-9]/g, '');formattedValue += digitsPart;input.value = formattedValue;}
function validateEmail(input) {input.value = input.value.toUpperCase().replace(/[^a-zA-Z@.]/g, '');const emailPattern = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i;const errorMessage = document.getElementById('error-message');if (!emailPattern.test(input.value)) {errorMessage.textContent = "Invalid email address.";} else {errorMessage.textContent = "";}}
</script>

******************************************

            













mobile => maxlength="16" oninput="this.value = this.value.toUpperCase().replace(/[^0-9]/g, '').replace(/(\  *?)\  */g, '$1')"





<script>

oninput="validatePAN(this)"

function validatePAN(input) {
            let value = input.value.toUpperCase().replace(/[^A-Z0-9]/g, '');
            let formattedValue = '';
            
            // Ensure the first 5 characters are letters
            formattedValue += value.slice(0, 5).replace(/[^A-Z]/g, '');
            
            // Ensure the next 4 characters are digits
            formattedValue += value.slice(5, 9).replace(/[^0-9]/g, '');
            
            // Ensure the last character is a letter
            if (value.length > 9) {
                formattedValue += value.slice(9, 10).replace(/[^A-Z]/g, '');
            }
            
            input.value = formattedValue;
        }

oninput="validateIFSC(this)"


 function validateIFSC(input) {
            let value = input.value.toUpperCase().replace(/[^A-Z0-9]/g, '');
            let formattedValue = '';
            let lettersPart = value.slice(0, 4).replace(/[^A-Z]/g, '');
            formattedValue += lettersPart;
            let digitsPart = value.slice(lettersPart.length, lettersPart.length + 7).replace(/[^0-9]/g, '');
            formattedValue += digitsPart;
            input.value = formattedValue;
        }





</script>

