@extends("user.userheader")
@section('content')
    <!-- ================================
    START BREADCRUMB AREA
    ================================= -->
    <section class="breadcrumb-area bread-bg">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">Membership Type</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="home">Home</a></li>
                                <li>Membership</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bread-svg-box">
            <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
                <polygon points="100 0 50 10 0 0 0 10 100 10"></polygon>
            </svg>
        </div>
    </section>
    <!-- ================================
    END BREADCRUMB AREA
    ================================= --><br>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <h1 style="color:rgb(43, 41, 160)">Membership : </h1><br>

    <p>
        <i class="la la-dot-circle"></i>
        There can be as many types of membership as are created by club. Some popular memberships are Platinum, Diamond,
        Gold or Silver professional membership. However, a club is free to design different membership types that attract
        diverse members, as long as it’s documented how they differ from traditional membership in their club bylaws.
    </p>
    <p>
        <i class="la la-dot-circle"></i>
        But,Our policy indulge the rule that member must come to our club & purchase the membership card. There is no
        facility available online to the respective website for the particular purpose. Here are the membership rates :
    </p>
    <div class="card-body">
        <table>
            <thead>
                <tr>
                    <th>
                        <h5><b>Photo</b></h5>
                    </th>
                    <th>
                        <h5><b>Type</b></h5>
                    </th>
                    <th>
                        <h5><b>No. Of Years</b></h5>
                    </th>
                    <th>
                        <h5><b>Charges</b></h5>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mstype as $item)
                    <tr>
                        <td>
                            @if ($item->type == 'Gold')
                                <img src="images/gold.jpeg" height="80" width="120">
                            @elseif($item->type == 'Diamond')
                                <img src="images/diamond.jpeg" height="80" width="120">
                            @elseif($item->type == 'Silver')
                                <img src="images/silver.jpeg" height="80" width="120">
                            @elseif($item->type == 'Platinum')
                                <img src="images/platinum.jpeg" height="80" width="120">
                            @endif
                        </td>
                        <td><strong>{{ $item->type }}</strong></td>
                        <td>{{ $item->noofyear }}</td>
                        <td>₹{{ $item->charges }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

<style>
    table,
    td,
    th {
        border: 2px solid;
        text-align: center;
        color: black;
    }

    thead {
        border: 2px solid;
        border-spacing: 2px;
    }

    table {
        width: 100%;
    }

    th,
    td {
        padding: 15px;
    }

    tr:hover {
        background-color: skyblue;
    }

    /* th {
        font-style:oblique;
        font-size:200%;
    } */

    p {
        color: black;
    }

    img {
        text-align: center;
    }

</style>