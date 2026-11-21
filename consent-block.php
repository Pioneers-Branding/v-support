<?php
// DPDP consent block. Include inside every enquiry <form>, just before the reCAPTCHA.
// Pages about young children set $consentAudience = 'guardian' before including this file.
// Styles live in header-links.php (.consent-block).
// Bump consent_version whenever this wording or the Privacy Policy changes, so each
// submission records which version the person agreed to.
$isGuardian = isset($consentAudience) && $consentAudience === 'guardian';
?>
<div class="form-group w-100 consent-block">
    <p class="consent-note"><strong>Why we need this:</strong> We use your name, phone number and email only to respond to your enquiry about our programmes.<?php if ($isGuardian): ?> Please don't share your child's personal details (such as date of birth or health information) here; we'll ask only for what's needed at admission.<?php endif; ?> We don't sell your data. You can withdraw your consent anytime on our <a href="data-request?type=withdraw-marketing" target="_blank" rel="noopener">Your Data Rights</a> page.</p>
    <label class="consent-check">
        <input type="checkbox" name="consent_privacy" value="yes" required>
        <span>I agree to V-Supporting Lives using my details to respond to this enquiry, as explained in the <a href="privacy-policy" target="_blank" rel="noopener">Privacy Policy</a> (<a href="privacy-policy-hi" target="_blank" rel="noopener" lang="hi">हिन्दी</a>).
        <?php if ($isGuardian): ?>I am the parent or legal guardian of the child I am enquiring about.<?php else: ?>I am 18 or older, or I have my parent or guardian's consent.<?php endif; ?> *</span>
    </label>
    <label class="consent-check">
        <input type="checkbox" name="consent_marketing" value="yes">
        <span>Send me updates about V-Supporting Lives programmes and events by WhatsApp, SMS or email. (Optional)</span>
    </label>
    <input type="hidden" name="consent_version" value="2026-11">
</div>
