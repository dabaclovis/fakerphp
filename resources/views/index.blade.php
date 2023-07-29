<!doctype html>
<html lang="en">

<head>
    <title>laravel faker tutorial</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class=" card-header pt-4 mt-3 text-center">
        <h1>FAKER FACTORY</h1>
    </div>
    <div class=" container text-center pt-2">
        <ul class=" list-group">

            <li class=" list-group-item">@php
                echo $faker->titleMale();
            @endphp</li>
            <li class=" list-group-item">@php
                echo $faker->titleFemale();
            @endphp</li>
            <li class=" list-group-item">@php
                echo $faker->title();
            @endphp</li>
            <li class=" list-group-item">@php
                echo $faker->name();
            @endphp</li>
            <li class=" list-group-item">@php
                echo $faker->firstName('male');
            @endphp</li>
            <li class=" list-group-item">@php
                echo $faker->firstNameMale();
            @endphp</li>
            <li class=" list-group-item">@php
                echo $faker->firstNameFemale();
            @endphp</li>
            <li class=" list-group-item">@php
                echo $faker->lastName();
            @endphp</li>
        </ul>
        <hr>
        <div class="">
            <Address>Address</Address>
        </div>
        <hr>
        <ul>
            <li>
                @php
                    echo $faker->state();
                @endphp
            </li>
            <li>
                @php
                    echo $faker->city();
                @endphp
            </li>
            <li>
                @php
                    echo $faker->streetName();
                @endphp
            </li>
            <li>
                @php
                    echo $faker->address();
                @endphp
            </li>
            <li>
                @php
                    echo $faker->postcode();
                @endphp
            </li>
            <li>
                @php
                   echo $faker->country();
                @endphp
            </li>
            <li>
                @php

                echo $faker->stateAbbr();
                @endphp
            </li>
            <li>
                @php
                    echo $faker->latitude();
                @endphp
            </li>
        </ul>
        <div>
            <h1>Phone Numbers</h1>
        </div>
        <ul>
            <li>{{ $faker->phoneNumber(); }}</li>
            <li>{{ $faker->tollFreePhoneNumber() }}</li>
            <li>{{ $faker->tollFreePhoneNumber() }}</li>
            <li>{{ $faker->e164PhoneNumber() }}</li>
        </ul>
        <div>
            <h2>Real text</h2>
            <hr>
            <ul>
                <li>{{ $faker->realText() }}</li>
                <li>{{ $faker->realTextBetween(100, 500) }}</li>
            </ul>
        </div>
        <div>
            <h1>Numbers and string</h1>
            <ul>
                <li>{{ $faker->numerify('user-###') }}</li>
                <li>{{ $faker->randomLetter('clovis') }}</li>
                <li>{{ $faker->numberBetween(10, 60) }}</li>
                <li>{{ $faker->randomDigit() }}</li>
                <li>{{ $faker->randomDigitNot(7) }}</li>
                <li>{{ $faker->randomDigitNotNull() }}</li>
                <li> {{  $faker->randomNumber(5, false) }}</li>
                <li> {{  $faker->randomNumber(5, true) }}</li>
            </ul>
        </div>
        <div>
            <h1>Text and paragraps</h1>
            <ul>
                <li>{{ $faker->word() }}</li>
                <li>{{ $faker->word(5) }}</li>
                <li>{{ $faker->word(5, true) }}</li>
            </ul>
            <h1>Sentences</h1>
            <ul>
                <li>{{ $faker->sentence() }}</li>
                <li>{{ $faker->sentence(3) }}</li>
                <li>{{ $faker->sentences(3, true) }}</li>
            </ul>
            <h1>Paragraph</h1>
            <ul>
                <li>{{ $faker->paragraphs(3, true) }}</li>
                <li>{{ $faker->paragraph() }}</li>
                <li>{{ $faker->paragraph(2) }}</li>
                <li>{{ $faker->paragraph(2, false) }}</li>
            </ul>
            <h1>Text</h1>
            <li>{{ $faker->text(600) }}</li>
        </div>
        <h1>Date and Time</h1>
        <ul>
            <li>{{ $faker->unixTime() }}</li>
            <li>{{ $faker->unixTime(new DateTime('+3 weeks')) }}</li>
            {{-- <li>{{ $faker->dateTime() }}</li> --}}
            <li>{{ $faker->date() }}</li>
            <li>{{ $faker->date(now('M /d /Y')) }}</li>
            {{-- <li>{{ $faker->dateTimeThisMonth('+12 days') }}</li> --}}
            <li>{{ $faker->dayOfMonth() }}</li>
            <li>{{ $faker->dayOfWeek() }}</li>
            <li>{{ $faker->month() }}</li>
            <li>{{ $faker->month('+10 weeks') }}</li>
            <li>{{ $faker->monthName('+10 weeks') }}</li>
            <li>{{ $faker->monthName() }}</li>
            <li>{{ $faker->year() }}</li>
            <li>{{ $faker->timezone() }}</li>
            <li>{{ $faker->mimeType() }}</li>
        </ul>
        <h1>Internet</h1>
        <ul>
            <li>{{ $faker->email() }}</li>
            <li>{{ $faker->safeEmail() }}</li>
            <li>{{ $faker->freeEmail() }}</li>
            <li>{{ $faker->companyEmail() }}</li>
            <li>{{ $faker->freeEmailDomain() }}</li>
            <li>{{ $faker->userName() }}</li>
            <li>{{ $faker->password(2,10) }}</li>
            <li>{{ $faker->domainName() }}</li>
            <li>{{ $faker->domainWord() }}</li>
            <li>{{ $faker->url() }}</li>
            <li>{{ $faker->ipv4() }}</li>
            <li>{{ $faker->localIpv4() }}</li>
            <li>{{ $faker->tld() }}</li>
            <li>{{ $faker->slug() }}</li>
            <li>{{ $faker->slug(3, true) }}</li>
            <li>{{ $faker->creditCardNumber('Visa',true, ' ') }}</li>
            <li>{{ $faker->creditCardNumber('Visa') }}</li>
            {{-- <li>{{ $faker->creditCardExpirationDate(false) }}</li> --}}
            <li>{{ $faker->creditCardExpirationDateString() }}</li>
            <li>{{ $faker->creditCardExpirationDateString(true, 'm / Y') }}</li>
            {{-- <li>{{ $faker->creditCardDetails(false) }}</li> --}}
        </ul>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
