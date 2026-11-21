<?php require_once 'privacy-config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Terms of Use | V-Supporting Lives</title>
    <meta name="description" content="Terms of use for the V-Supporting Lives website.">
    <?php include('header-links.php'); ?>
</head>

<body>
    <?php include('header.php'); ?>

    <section class="padding-top padding-bottom">
        <div class="container">
            <div class="policy-content">
                <h1>Terms of Use</h1>
                <p class="policy-meta">Last updated: <?php echo h($policyUpdated); ?></p>

                <p>These terms apply to your use of <?php echo h($org['website']); ?>, run by <?php echo h($org['legal']); ?> ("we", "us"). By using this website, you agree to them.</p>

                <h2>1. Information about our programmes</h2>
                <p>This website gives general information about our programmes and those of our partners: Kidzee, KiDZ CLUB, CoDaC, Teachers Training Institution and GD Goenka Healthcare Academy. Course details, fees, schedules and admission criteria are confirmed by the relevant centre and may change. Submitting a form is an enquiry, not an admission or booking.</p>

                <h2>2. Your responsibilities</h2>
                <ul>
                    <li>Give accurate information, and submit only your own details or details you are authorised to share.</li>
                    <li>Enquiries about a child must be made by the child's parent or legal guardian. If you are under 18, you need your parent's or guardian's consent to use our forms.</li>
                    <li>Do not misuse this website, for example by sending spam, uploading harmful code, or trying to gain unauthorised access.</li>
                </ul>

                <h2>3. Intellectual property</h2>
                <p>The text, images, logos and design of this website belong to us, our partners or our licensors. Partner names and logos are trademarks of their respective owners. You may not copy or reuse this content without written permission, except for personal, non-commercial use.</p>

                <h2>4. Third-party links and services</h2>
                <p>This website links to or uses services run by others, such as YouTube, Google Maps and Google reCAPTCHA. We are not responsible for their content or privacy practices.</p>

                <h2>5. Limitation of liability</h2>
                <p>We try to keep this website accurate and available, but it is provided "as is". To the extent permitted by law, we are not liable for any loss arising from your use of this website or reliance on its content.</p>

                <h2>6. Privacy</h2>
                <p>Our <a href="privacy-policy">Privacy Policy</a> explains how we handle your personal data, including children's data.</p>

                <h2>7. Changes to these terms</h2>
                <p>We may update these terms from time to time. The "Last updated" date shows when they last changed.</p>

                <h2>8. Governing law</h2>
                <p>These terms are governed by the laws of India. Courts in Goa have exclusive jurisdiction over any dispute arising from them.</p>

                <h2>9. Contact</h2>
                <p><?php echo h($org['legal']); ?>, <?php echo h($org['address']); ?>. Phone: <a href="tel:<?php echo h(str_replace('-', '', $org['phone'])); ?>"><?php echo h($org['phone']); ?></a>.</p>
            </div>
        </div>
    </section>

    <?php include('footer.php'); ?>
    <?php include('script-link.php'); ?>
</body>

</html>
