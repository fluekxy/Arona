<!DOCTYPE html>
<html>

<head>
    <title>Arona X Plana</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- <link rel="stylesheet" type="text/css" href="styling.css"> -->

    <style>
        .arona-screen {
            width: 100%;
            height: 100vh;
            position: relative;
        }

        .arona::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("Asset/Home-Background1.png");
            background-size: cover;
            opacity: 0.8;
            z-index: -1;
        }

        .arona::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("Asset/Home-Arona1.png");
            background-size: cover;
            z-index: 1;
        }

        .home-text {
            color: #FFF;
            text-align: center;
            font-family: Raleway;
            font-size: 400px;
            font-style: italic;
            font-weight: 600;
            line-height: normal;
            font-variant: all-small-caps;
            letter-spacing: 31.969px;
            position: absolute;
            top: 46%;
            left: 50%;
            transform: translate(-50%, -50%);

            z-index: -1;
        }

        .button {
            width: 160px;
            height: 160px;
            background: url("Asset/Plana-Logo-change.png") no-repeat center center;
            background-size: cover;
            position: absolute;
            border: none;
            cursor: pointer;
            top: 75%;
            left: 45%;
            z-index: 1;
            user-select: none;
        }

        /* PLANA SCREEN */

        .plana-screen {
            width: 100%;
            height: 100vh;
            position: relative;
        }

        .plana::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("Asset/Home-Background2.png");
            background-size: cover;
            z-index: -1;
        }

        .plana::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("Asset/Home-Plana2.png");
            background-size: cover;
            z-index: 1;
        }

        .home-text-plana {
            color: #FFF;
            text-align: center;
            font-family: Raleway;
            font-size: 400px;
            font-style: italic;
            font-weight: 600px;
            line-height: normal;
            font-variant: all-small-caps;
            letter-spacing: 31.969px;
            position: absolute;
            top: 46%;
            left: 50%;
            transform: translate(-50%, -50%);
            user-select: none;
            z-index: -1;
        }

        .button-plana {
            width: 160px;
            height: 160px;
            background: url("Asset/Arona-Logo2.png") no-repeat center center;
            background-size: cover;
            position: absolute;
            border: none;
            cursor: pointer;
            top: 75%;
            left: 45%;
            z-index: 1;
            user-select: none;
        }

        /* PAGE 2 */

        .hugme {
            width: 100%;
            height: 100vh;
            position: relative;
        }

        .hugmeuwooh {
            content: "";
            position: absolute;
            top: 3%;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("Asset/AronaPlana_Hugme.png");
            background-size: cover;
            opacity: 0.8;
        }

        /* Flip For Arona */

        .DArona {
            background-color: transparent;
            width: 306.176px;
            height: 427px;
            perspective: 6000px;
            /* Change Perspective */
        }

        .DArona-inner {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 345%;
            text-align: center;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }

        .DArona:hover .DArona-inner {
            transform: rotateY(180deg);
        }

        .DArona-front,
        .DArona-back {
            box-shadow: 0 8px 14px 0 rgba(0, 0, 0, 0.2);
            position: absolute;
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 100%;
            height: 100%;
            top: 95%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .DArona-front {
            background: url(Asset/Gacha-Document.png);
        }

        .DArona-back {
            background: url(Asset/Arona-Document.png);
            transform: rotateY(180deg);
        }

        /* Flip For Plana */

        .DPlana {
            background-color: transparent;
            width: 306.176px;
            height: 427px;
            perspective: 6000px;
            /* Change Perspective */
        }

        .DPlana-inner {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 200%;
            text-align: center;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }

        .DPlana:hover .DPlana-inner {
            transform: rotateY(180deg);
        }

        .DPlana-front,
        .DPlana-back {
            box-shadow: 0 8px 14px 0 rgba(0, 0, 0, 0.2);
            position: absolute;
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 100%;
            height: 100%;
            top: -5%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .DPlana-front {
            background: url(Asset/Gacha-Document-Plana.png);
        }

        .DPlana-back {
            background: url(Asset/Plana-Document.png);
            transform: rotateY(180deg);
        }
    </style>
</head>

<body>

    <div id="display1">
        <div class="arona-screen">
            <div class="arona"></div>
            <div class="home-text"><b>ARONA</b></div>
            <button id="toggleButton1" class="button"></button>
        </div>
    </div>

    <div id="display2" style="display: none;">
        <div class="plana-screen">
            <div class="plana"></div>
            <div class="home-text-plana">PLANA</div>
            <button id="toggleButton2" class="button-plana"></button>
        </div>
    </div>

    <script src="testjs.js"></script>

    <div class="hugme">
        <div class="hugmeuwooh"></div>

        <div class="DArona">
            <div class="DArona-inner">
                <div class="DArona-front"></div>

                <div class="DArona-back"></div>

            </div>
        </div>

        <div class="DPlana">
            <div class="DPlana-inner">
                <div class="DPlana-front"></div>

                <div class="DPlana-back"></div>

            </div>
        </div>

    </div>

</body>

</html>