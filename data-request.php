<?php
require_once 'privacy-config.php';

// Request types. The slug can be pre-selected with ?type=..., e.g. data-request?type=remove-photo
$requestTypes = [
    'access'             => 'Get a summary of my data',
    'correct'            => 'Correct or update my data',
    'delete'             => 'Delete my data',
    'export'             => 'Export my data (machine-readable copy)',
    'remove-photo'       => 'Remove a photo of my child from the website',
    'withdraw-marketing' => 'Stop marketing messages (withdraw marketing consent)',
    'withdraw-all'       => 'Withdraw all consent',
    'nominate'           => 'Nominate someone to exercise my rights',
    'complaint'          => 'Complaint or other request',
];
$selectedType = isset($_GET['type']) && isset($requestTypes[$_GET['type']]) ? $_GET['type'] : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Data Rights | V-Supporting Lives</title>
    <meta name="description" content="Ask V-Supporting Lives to access, correct, delete or export your personal data, remove a photo of your child, withdraw consent, or nominate someone.">
    <?php include('header-links.php'); ?>
</head>

<body>
    <?php include('header.php'); ?>

    <section class="padding-top padding-bottom">
        <div class="container">
            <div class="policy-content">
                <h1>Your Data Rights</h1>
                <p>Under India's Digital Personal Data Protection Act, 2023, you can ask us to show, correct, delete or export the personal data you have shared with us, remove a photo of your child, stop marketing messages, withdraw your consent, or nominate someone to act for you. Parents and guardians can make requests for their children. Use this form, or contact our Grievance Officer (details in our <a href="privacy-policy">Privacy Policy</a>).</p>

                <div class="policy-box">
                    <p><strong>What happens next</strong></p>
                    <p>1. We acknowledge your request within 2 business days.</p>
                    <p>2. Before we delete, export or change any data, we verify your identity by sending a one-time password (OTP) to the phone number or email you gave us, or by calling you back on it.</p>
                    <p>3. We aim to complete your request within 15 business days and will tell you once it is done.</p>
                </div>

                <form class="contact-form data-request-form" accept-charset="UTF-8" action="<?php echo h($dataRequestEndpoint); ?>" method="post" id="data-request-form">
                    <input type="hidden" name="form_type" value="Data rights request">

                    <div class="form-group w-100">
                        <label for="dr-type">What would you like us to do? *</label>
                        <select id="dr-type" name="request_type" required>
                            <option value="" disabled <?php echo $selectedType === '' ? 'selected' : ''; ?>>Choose a request</option>
                            <?php foreach ($requestTypes as $slug => $label): ?>
                                <option value="<?php echo h($label); ?>" data-slug="<?php echo h($slug); ?>" <?php echo $selectedType === $slug ? 'selected' : ''; ?>><?php echo h($label); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group w-100">
                        <label for="dr-name">Your full name *</label>
                        <input id="dr-name" type="text" name="name" required>
                    </div>
                    <div class="form-group w-100">
                        <label for="dr-phone">Phone number you gave us *</label>
                        <input id="dr-phone" type="tel" name="phone" pattern="[0-9+\- ]{10,15}" required>
                    </div>
                    <div class="form-group w-100">
                        <label for="dr-email">Email you gave us (if any)</label>
                        <input id="dr-email" type="email" name="email">
                    </div>
                    <div class="form-group w-100">
                        <label for="dr-message">Describe what you need *</label>
                        <textarea id="dr-message" name="message" rows="4" required placeholder="For example: which details to correct, or which photo (page and event) to remove."></textarea>
                    </div>

                    <fieldset id="dr-nominee">
                        <h3>Nominee details</h3>
                        <p>Your nominee can exercise your data rights (access, correction, deletion) on your behalf if you pass away or become unable to manage them. We will ask for ID proof for you and your nominee when we verify this request.</p>
                        <div class="form-group">
                            <label for="dr-nominee-name">Nominee's full name</label>
                            <input id="dr-nominee-name" type="text" name="nominee_name">
                        </div>
                        <div class="form-group">
                            <label for="dr-nominee-relation">Relationship to you</label>
                            <input id="dr-nominee-relation" type="text" name="nominee_relationship">
                        </div>
                        <div class="form-group">
                            <label for="dr-nominee-phone">Nominee's phone number</label>
                            <input id="dr-nominee-phone" type="tel" name="nominee_phone">
                        </div>
                        <div class="form-group">
                            <label for="dr-nominee-email">Nominee's email</label>
                            <input id="dr-nominee-email" type="email" name="nominee_email">
                        </div>
                    </fieldset>

                    <div class="form-group w-100 consent-block">
                        <label class="consent-check">
                            <input type="checkbox" name="identity_confirmation" value="yes" required>
                            <span>I confirm I am the person named above (or the parent or guardian of the child concerned), or legally authorised to act for them. I understand V-Supporting Lives will verify my identity before acting on this request, and will use these details only to handle it. *</span>
                        </label>
                    </div>
                    <input type="hidden" name="consent_version" value="2026-11">

                    <div class="g-recaptcha" data-sitekey="6LctBhkqAAAAANJj93LRjXUmlsKsCGHL6VnXpTbh"></div>
                    <div class="form-group w-100 text-center mt-4">
                        <button type="submit" class="custom-button"><span>Submit request</span></button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        // Show the nominee fields (and make them required) only for nomination requests.
        (function () {
            var select = document.getElementById('dr-type');
            var box = document.getElementById('dr-nominee');
            var required = ['dr-nominee-name', 'dr-nominee-relation', 'dr-nominee-phone'];
            function update() {
                var opt = select.options[select.selectedIndex];
                var isNominate = opt && opt.getAttribute('data-slug') === 'nominate';
                box.style.display = isNominate ? '' : 'none';
                required.forEach(function (id) { document.getElementById(id).required = isNominate; });
            }
            select.addEventListener('change', update);
            update();
        })();
    </script>

    <?php include('footer.php'); ?>
    <?php include('script-link.php'); ?>
</body>

</html>
