<h1>Hello, {{ $name }}</h1>
<p>Thank You for contacting us.</p>
<br>
<p>I'm sorry to hear you wish to cancel your bookings with us. 
    Your booking for<strong> {{ session()->get('canceltype') }} </strong>Rooms from<strong> {{ session()->get('cancelcheckin') }}</strong> to<strong> {{ session()->get('cancelcheckout') }}</strong> has been cancelled successfully.
    If you would like to cancel due to quality issues, we would like to do anything we can to resolve the issue.</p>
<p>Are you available for a quick call to discuss potential resolutions? Let me know what works best for you.</p>
<p> We appreciate your time!</p>
<p>Refund Amount :<strong> ₹{{session()->get('refundamt')}}</strong> (As per Club Rule)</p>
<p>Thanks</p>
<p><b>The Clubies</b></p>