<?php require_once 'privacy-config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Privacy Policy | V-Supporting Lives</title>
    <meta name="description" content="How V-Supporting Lives collects, uses and protects personal data, including children's data, and how to exercise your rights under India's DPDP Act.">
    <?php include('header-links.php'); ?>
</head>

<body>
    <?php include('header.php'); ?>

    <section class="padding-top padding-bottom">
        <div class="container">
            <div class="policy-content">
                <h1>Privacy Policy</h1>
                <p class="policy-meta">Last updated: <?php echo h($policyUpdated); ?> &nbsp;|&nbsp; Read in: <strong>English</strong> | <a href="privacy-policy-hi" lang="hi">हिन्दी</a></p>

                <p>This Privacy Policy explains how <?php echo h($org['legal']); ?> ("we", "us") collects, uses and protects personal data through this website, <?php echo h($org['website']); ?>. It follows India's Digital Personal Data Protection Act, 2023 (the "DPDP Act") and the rules made under it.</p>

                <h2>1. What personal data we collect</h2>
                <table>
                    <thead>
                        <tr><th>Information</th><th>Where we collect it</th><th>Required?</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>Name and phone number</td><td>Enquiry forms</td><td>Yes</td></tr>
                        <tr><td>Email address</td><td>Enquiry forms</td><td>Optional</td></tr>
                        <tr><td>Subject and message</td><td>Enquiry forms</td><td>Optional</td></tr>
                        <tr><td>Preferred centre location</td><td>Kidzee and GD Goenka enquiry forms</td><td>Optional</td></tr>
                        <tr><td>Your consent choices, and which version of this notice you saw</td><td>Every form</td><td>Recorded automatically when you submit</td></tr>
                        <tr><td>Details in a data rights request, including any nominee's name and contact details</td><td><a href="data-request">Your Data Rights</a> page</td><td>Only what is needed to handle your request</td></tr>
                        <tr><td>Technical data such as IP address, browser type and how you interact with the reCAPTCHA check</td><td>Collected automatically by our hosting provider and by the third-party services listed in section 4 (such as Google reCAPTCHA and Google Maps)</td><td>Automatic</td></tr>
                    </tbody>
                </table>
                <p>We do not use advertising or analytics trackers (such as the Meta Pixel or Google Analytics) on this website.</p>

                <h2>2. Why we use it</h2>
                <ul>
                    <li>To respond to your enquiry about our programmes. We do this with your consent, which you give by ticking the required box on our forms.</li>
                    <li>To send you updates about our programmes and events by WhatsApp, SMS or email, <strong>only</strong> if you tick the optional marketing box.</li>
                    <li>To handle your data rights requests and complaints.</li>
                    <li>To protect our forms from spam and keep this website secure.</li>
                </ul>
                <p>We do not sell your personal data. We will not use it for any other purpose without asking you first.</p>

                <h2>3. Your consent and how to withdraw it</h2>
                <p>Our forms have two separate checkboxes. The first lets us use your details to respond to your enquiry. The second, for marketing messages, is optional and unticked by default.</p>
                <p>You can withdraw either consent at any time, as easily as you gave it:</p>
                <ul>
                    <li>Use the <a href="data-request?type=withdraw-marketing">Your Data Rights</a> page;</li>
                    <li>Reply "STOP" to any WhatsApp or SMS message from us;</li>
                    <li>Click "Unsubscribe" in any marketing email from us; or</li>
                    <li>Contact our Grievance Officer (details in section 9).</li>
                </ul>
                <p>Withdrawing consent does not affect anything we did with your data before you withdrew it.</p>

                <h2>4. Who we share it with</h2>
                <ul>
                    <li><strong>Our partner centres:</strong> if you enquire about a partner programme (Kidzee, KiDZ CLUB, CoDaC, Teachers Training Institution or GD Goenka Healthcare Academy), we share your enquiry with the relevant centre so that it can respond to you.</li>
                    <li><strong>Formester</strong> (online form service): receives and stores form submissions.</li>
                    <li><strong>Google reCAPTCHA</strong>: checks that form submissions come from a person, not a bot. Google receives your IP address, browser details and interaction data, under <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">Google's Privacy Policy</a>.</li>
                    <li><strong>Google Maps and Google Fonts</strong>: the maps of our centres and some of the fonts on this website load from Google, which receives your IP address and browser details and may set cookies.</li>
                    <li><strong>Content delivery networks</strong> (BootstrapCDN and Google Hosted Libraries): some of the website's code and styles load from these services, which receive your IP address and browser details.</li>
                    <li><strong>Our website hosting provider</strong>: hosts this website and keeps server logs.</li>
                    <li><strong>Email and messaging providers</strong> our team uses to reply to you, such as email and WhatsApp.</li>
                </ul>
                <p>We may also disclose personal data when the law requires it. We do not share your data with advertisers.</p>

                <h2>5. How long we keep it</h2>
                <ul>
                    <li><strong>Enquiries:</strong> up to 12 months after our last contact with you. If you or your child enrol, admission records are kept by the centre under its own policy.</li>
                    <li><strong>Marketing consent:</strong> until you withdraw it. We keep a record of the withdrawal so we can show we respected it.</li>
                    <li><strong>Data rights requests and complaints:</strong> 2 years after the request is closed.</li>
                    <li><strong>Server logs:</strong> up to 1 year, for security.</li>
                </ul>
                <p>After these periods, we delete the data or make it anonymous.</p>

                <h2>6. How we protect it</h2>
                <p>The whole website uses HTTPS encryption, and our forms only send data over secure connections. Access to form submissions is limited to staff who need it to respond to you. We use service providers that offer appropriate security safeguards. If a personal data breach occurs, we will inform the people affected and the Data Protection Board of India as the law requires.</p>

                <h2>7. Your rights</h2>
                <p>Under the DPDP Act, you have the right to:</p>
                <ul>
                    <li><strong>Access:</strong> get a summary of the personal data we hold about you, how we use it, and who we have shared it with;</li>
                    <li><strong>Correction and erasure:</strong> ask us to correct, complete, update or delete your personal data;</li>
                    <li><strong>Withdraw consent</strong> at any time (see section 3);</li>
                    <li><strong>Grievance redressal:</strong> complain to us and get a response (see section 9); and</li>
                    <li><strong>Nominate</strong> another person to exercise these rights on your behalf if you die or become unable to manage them.</li>
                </ul>
                <p>You can also ask for a copy of your data in a machine-readable format. Parents and legal guardians can exercise these rights on behalf of their children.</p>
                <h3>How to make a request</h3>
                <p>Use the <a href="data-request">Your Data Rights</a> page, or contact our Grievance Officer. Before we delete, export or change any data, we will verify your identity by sending a one-time password (OTP) to the phone number or email you gave us, or by calling you back on it. We will acknowledge your request within 2 business days and aim to complete it within 15 business days.</p>

                <h2>8. Children</h2>
                <p>Many of our programmes are for children, such as preschool at Kidzee and activities at KiDZ CLUB. We protect children's data carefully:</p>
                <ul>
                    <li><strong>Enquiries about a child must come from a parent or legal guardian.</strong> Our Kidzee and KiDZ CLUB forms ask you to confirm this. Please don't share your child's personal details (such as date of birth or health information) through this website; the centre will collect only what is needed at admission, with your consent.</li>
                    <li><strong>Students under 18</strong> enquiring about our training programmes need their parent's or guardian's consent, and our forms ask them to confirm it.</li>
                    <li><strong>No tracking of children:</strong> we do not track or monitor children's online behaviour, and we do not show them targeted advertising.</li>
                    <li><strong>Photos:</strong> this website shows photos from our events and activities, and some of them include children. If you are a parent or guardian and would like a photo of your child removed, please use the <a href="data-request?type=remove-photo">Your Data Rights</a> page and we will remove it promptly, within 15 business days at the latest.</li>
                </ul>
                <p>If we learn that we have collected a child's personal data without verifiable consent from their parent or guardian, we will delete it.</p>

                <h2>9. Grievance Officer</h2>
                <p>If you have any question or complaint about how we handle your personal data, please contact our Grievance Officer:</p>
                <div class="policy-box">
                    <p><strong>Grievance Officer (Data Protection), <?php echo h($org['brand']); ?></strong></p>
                    <?php if ($grievance['name'] !== ''): ?><p>Name: <?php echo h($grievance['name']); ?></p><?php endif; ?>
                    <?php if ($grievance['email'] !== ''): ?><p>Email: <a href="mailto:<?php echo h($grievance['email']); ?>"><?php echo h($grievance['email']); ?></a></p><?php endif; ?>
                    <p>Phone: <a href="tel:<?php echo h(str_replace('-', '', $grievance['phone'])); ?>"><?php echo h($grievance['phone']); ?></a></p>
                    <p>Online: <a href="data-request?type=complaint">Your Data Rights</a> page</p>
                    <p>Address: <?php echo h($org['address']); ?></p>
                    <p>Hours: <?php echo h($grievance['hours']); ?></p>
                </div>
                <p>We will acknowledge your complaint within 2 business days and aim to resolve it within 15 business days. If we cannot resolve it in this time, we will tell you why and when to expect a resolution.</p>
                <p>If you are not satisfied with our response, you may escalate your complaint to the Data Protection Board of India (DPBI) through its official portal: <a href="https://dpbi.gov.in" target="_blank" rel="noopener">https://dpbi.gov.in</a>. Please contact our Grievance Officer first, as the Board expects you to use our grievance process before approaching it.</p>

                <h2>10. Changes to this policy</h2>
                <p>We may update this policy from time to time. The "Last updated" date at the top shows when it last changed. If a change affects how we use data you have already given us, we will ask for your consent again where required.</p>
            </div>
        </div>
    </section>

    <?php include('footer.php'); ?>
    <?php include('script-link.php'); ?>
</body>

</html>
