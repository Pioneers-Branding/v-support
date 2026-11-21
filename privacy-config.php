<?php
// DPDP settings shared by privacy-policy.php, privacy-policy-hi.php, terms.php and data-request.php.
// Edit the details here once; every page updates.
//
// TODO (client): fill in the Grievance Officer's full name and a dedicated email address
// (e.g. grievance@v-supportinglives.com). DPDP expects a named person with an email contact.
// Until they are filled in, the pages show the role, phone number and the Data Rights form.

$org = [
    'brand'   => 'V-Supporting Lives',
    'legal'   => 'V-Supporting Lives',
    'website' => 'v-supportinglives.com',
    'address' => 'Opposite Kesarval Gardens, Near Birla Cross, Panjim-Margaon Highway, Verna, Goa 403801',
    'phone'   => '+91-9226746748',
];

$grievance = [
    'name'     => '', // e.g. 'Ms. Full Name'
    'email'    => '', // e.g. 'grievance@v-supportinglives.com'
    'phone'    => '+91-9226746748',
    'hours'    => 'Monday to Saturday, 10:00 am to 6:00 pm IST',
    'hours_hi' => 'सोमवार से शनिवार, सुबह 10:00 से शाम 6:00 बजे (IST)',
];

// Shown as "Last updated" on the policy pages. Change it whenever the policy text changes,
// and bump consent_version in consent-block.php at the same time.
$policyUpdated   = '21 November 2026';
$policyUpdatedHi = '21 नवंबर 2026';

// Where data rights requests are sent. Currently the site's existing Formester form, tagged with
// form_type = "Data rights request". Swap in a dedicated Formester form URL when one is created.
$dataRequestEndpoint = 'https://app.formester.com/forms/a1548838-a6a3-492f-8f6f-cdaae0e73c4d/submissions';

if (!function_exists('h')) {
    function h($s) { return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8'); }
}
