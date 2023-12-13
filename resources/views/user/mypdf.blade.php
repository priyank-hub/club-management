<!DOCTYPE html>
<html>
<head>
    <title>Billing Details </title>
</head>
<body>
    <h1><b>Happy Club</b></h1>
    <hr>
    <h1>Hello, {{ session()->get('membername') }}</h1>
<p>Thank You for Choosing Happy Club. We look forward to hosting your stay.</p>
<br>
<p>This is confirmation for your reservation at Happy Club for the dates of {{ session()->get('bkcheckin') }} to {{ session()->get('bkcheckout') }}. We’ve received your Total payment of {{ session()->get('bktotalcharges') }}/- .</p>
<br>
<p>Here are your full booking details.</p>
<ul>
    <ol>
        Roomtype : {{ session()->get('bktype') }}
    </ol>
    <ol>
        Checkin : {{ session()->get('bkcheckin') }}
    </ol>
    <ol>
        Checkout : {{ session()->get('bkcheckout') }}
    </ol>
    <ol>
        Extra Facilities : {{ session()->get('bkextrafacility') }}
    </ol>
    <ol>
        Total Charges : {{ session()->get('bktotalcharges') }}/-
    </ol>
</ul>
<br>
<p>If you need to make any changes or have any questions please contact us on happyclub@gmail.com or +91 7096034320</p>
<p><b>Now,Let the vacation countdown begin.</b></p>
<br>
<p>Organization Authorities, </p>
<b><p>Happy Club</p></b>
</body>
</html>