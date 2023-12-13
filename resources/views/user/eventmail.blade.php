<h1><b>THE CLUBIES</b></h1>
<hr>
<h1>Hello, {{ $name }}</h1>
<p>Thank You for Choosing The Clubies.</p>
<br> 
<p>This is confirmation for your event booking at The Clubies for the dates  {{ session()->get('eventdate') }}.
</p>
<br>
<p>Here are your full event booking details.</p>
<ul>
    <ol>
        Event : {{ session()->get('eventname') }}
    </ol>
    <ol>
        Date : {{ session()->get('eventdate') }}
    </ol>
    <ol>
        Time : {{ session()->get('eventtime') }}
    </ol>
    <ol>
        No. of Member : {{ session()->get('eventmember') }}
    </ol>
</ul>
<br>
<p>If you need to make any changes or have any questions please contact us on theclubies@gmail.com or +91 7096034320</p>
<p><b>Now,Let the vacation countdown begin.</b></p>
<br>
<p>Organization Authorities, </p>
<b>
    <p>The Clubies</p>
</b>