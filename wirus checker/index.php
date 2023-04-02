<!DOCTYPE html>
<html class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>HYPERTRON</title>
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/hyper.css?v=1.31657578003">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="theme-assets/css/core/colors/palette-gradient.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <style>
  
    </style>
</head>

<body class="vertical-layout" data-color="bg-gradient-x-purple-blue">
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before mb-3">
            </div>
            <div class="content-body container">
                <center>
                    <div class="hyper_logo"></div>
                </center>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body text-center">

                                <textarea rows="6" class="form-control text-center form-checker " placeholder="DROP CCS HERE"></textarea> <br>
                                <!-- <input type="text" id="amoont" placeholdcr="Amount in $USD" class="form-control text-center">	 -->
                                <button class="btn btn-play btn-glow btn-bg-gradient-x-blue-cyan text-white" style="width: 49%; float: left;"><i class="fs fs-play"></i> START</button>
                                <button class="btn btn-stop btn-glow btn-bg-gradient-x-red-pink text-white" style="width: 49%; float: right;" disabled><i class="fs fs-stop"></i> STOP</button>

                            </div>
                        </div>
                    </div>


                    <!-- ---------------------------------   -->
                    <div class="col-md-6 liner">
                        <div class="card mb-2">
                            <div class="card-body">

                                <h5>HITS <span class="badge badge-success float-right charge">0</span></h5>


                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 liner">
                        <div class="card mb-2">
                            <div class="card-body">

                                <h5>LIVE <span class="badge badge-success float-right aprovadas">0</span></h5>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 liner">
                        <div class="card mb-2">
                            <div class="card-body">

                                <h5>DEAD <span class="badge badge-danger float-right reprovadas">0</span></h5>


                            </div>
                        </div>
                    </div>




                    <div class="col-md-6 liner">
                        <div class="card mb-2">
                            <div class="card-body">
                                <h5>Total <span class="badge badge-primary float-right carregadas">0</span></h5>


                            </div>
                        </div>
                    </div>
















                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body hiter">
                                <div class="float-right">
                                    <button type="show" class="btn btn-primary btn-sm show-charge"><i class="fa fa-eye-slash"></i></button>
                                    <button class="btn btn-success btn-sm btn-copy1"><i class="fa fa-copy"></i></button>
                                </div>
                                <h4 class="card-title mb-">HITS</h4>
                                <div id='lista_charge'></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body hiter">
                                <div class="float-right">
                                    <button type="show" class="btn btn-primary btn-sm show-lives"><i class="fa fa-eye-slash"></i></button>
                                    <button class="btn btn-success btn-sm btn-copy"><i class="fa fa-copy"></i></button>
                                </div>
                                <h4 class="card-title mb-2">LIVE</h4>
                                <div id='lista_aprovadas'></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body hiter">
                                <div class="float-right">
                                    <button type='hidden' class="btn btn-primary btn-sm show-dies"><i class="fa fa-eye"></i></button>
                                    <button class="btn btn-danger btn-sm btn-trash"><i class="fa fa-trash"></i></button>
                                </div>
                                <h4 class="card-title mb-1"> DEAD</h4>
                                <div style='display: none;' id='lista_reprovadas'></div>
                            </div>
                        </div>
                    </div>

                    </section>
                </div>
            </div>
        </div>
        <script src="theme-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>

        <script>
            function removelinha() {
                var a = $(".form-checker").val().split("\n");
                a.splice(0, 1), $(".form-checker").val(a.join("\n"))
            }
            $(document).ready(function() {
                $(".show-charge").click(function() {
                    var a = $(".show-charge").attr("type");
                    $("#lista_charge").slideToggle(), "show" == a ? ($(".show-charge").html('<i class="fa fa-eye"></i>'), $(".show-charge").attr("type", "hidden")) : ($(".show-charge").html('<i class="fa fa-eye-slash"></i>'), $(".show-charge").attr("type", "show"))
                }), $(".show-lives").click(function() {
                    var a = $(".show-lives").attr("type");
                    $("#lista_aprovadas").slideToggle(), "show" == a ? ($(".show-lives").html('<i class="fa fa-eye"></i>'), $(".show-lives").attr("type", "hidden")) : ($(".show-lives").html('<i class="fa fa-eye-slash"></i>'), $(".show-lives").attr("type", "show"))
                }), $(".show-dies").click(function() {
                    var a = $(".show-dies").attr("type");
                    $("#lista_reprovadas").slideToggle(), "show" == a ? ($(".show-dies").html('<i class="fa fa-eye"></i>'), $(".show-dies").attr("type", "hidden")) : ($(".show-dies").html('<i class="fa fa-eye-slash"></i>'), $(".show-dies").attr("type", "show"))
                }), $(".btn-trash").click(function() {
                    Swal.fire({
                        title: " ",
                        icon: "success",
                        showConfirmButton: !1,
                        toast: !0,
                        position: "top-end",
                        timer: 3e3
                    }), $("#lista_reprovadas").text("")
                }), $(".btn-copy1").click(function() {
                    Swal.fire({
                        title: " ",
                        icon: "success",
                        showConfirmButton: !1,
                        toast: !0,
                        position: "top-end",
                        timer: 3e3
                    });
                    var b = document.getElementById("lista_charge").innerText,
                        a = document.createElement("textarea");
                    a.value = b, document.body.appendChild(a), a.select(), document.execCommand("copy"), document.body.removeChild(a)
                }), $(".btn-copy").click(function() {
                    Swal.fire({
                        title: " ",
                        icon: "success",
                        showConfirmButton: !1,
                        toast: !0,
                        position: "top-end",
                        timer: 3e3
                    });
                    var b = document.getElementById("lista_aprovadas").innerText,
                        a = document.createElement("textarea");
                    a.value = b, document.body.appendChild(a), a.select(), document.execCommand("copy"), document.body.removeChild(a)
                }), $(".btn-play").click(function() {
                    var a = $(".form-checker").val().trim(),
                        f = $("#amount").val() ? $("#amount").val() : .5,
                        d = a.split("\n"),
                        g = 0,
                        h = 0,
                        i = 0,
                        j = 0,
                        e = "";
                    if (!a) return Swal.fire({
                        title: "Where your card?? please add a card!!",
                        icon: "error",
                        showConfirmButton: !1,
                        toast: !0,
                        position: "top-end",
                        timer: 3e3
                    }), !1;
                    Swal.fire({
                        title: "Please wait for the card to be processed !!",
                        icon: "success",
                        showConfirmButton: !1,
                        toast: !0,
                        position: "top-end",
                        timer: 3e3
                    });
                    var b = d.filter(function(a) {
                            if ("" !== a.trim()) return e += a.trim() + "\n", a.trim()
                        }),
                        c = b.length;
                    if ($(".form-checker").val(e.trim()), c > 10001) return Swal.fire({
                        title: "Ahh limit Reached! 10k at once",
                        icon: "warning",
                        showConfirmButton: !1,
                        toast: !0,
                        position: "top-end",
                        timer: 3e3
                    }), !1;
                    $(".carregadas").text(c), $(".btn-play").attr("disabled", !0), $(".btn-stop").attr("disabled", !1), b.forEach(function(a) {
                        var b = $.ajax({
                            url: "../api/nonsk.php?lista=" + a + "&amt=" + f,
                            success: function(a) {
                                a.indexOf("#HITS") >= 0 ? (Swal.fire({
                                    title: ",
                                    icon: "success",
                                    showConfirmButton: !1,
                                    toast: !0,
                                    position: "top-end",
                                    timer: 3e3
                                }), $("#lista_charge").append(a), removelinha(), g += 1) : a.indexOf("#LIVE") >= 0 ? (Swal.fire({
                                    title: ",
                                    icon: "success",
                                    showConfirmButton: !1,
                                    toast: !0,
                                    position: "top-end",
                                    timer: 3e3
                                }), $("#lista_aprovadas").append(a), removelinha(), h += 1) : ($("#lista_reprovadas").append(a), removelinha(), i += 1), j = g + h + i, $(".charge").text(g), $(".aprovadas").text(h), $(".reprovadas").text(i), $(".testadas").text(j), j == c && (Swal.fire({
                                    title: "HAVE BEEN DISPOSED",
                                    icon: "success",
                                    showConfirmButton: !1,
                                    toast: !0,
                                    position: "top-end",
                                    timer: 3e3
                                }), $(".btn-play").attr("disabled", !1), $(".btn-stop").attr("disabled", !0))
                            }
                        });
                        $(".btn-stop").click(function() {
                            return Swal.fire({
                                title: "Succeeding Pause !!",
                                icon: "warning",
                                showConfirmButton: !1,
                                toast: !0,
                                position: "top-end",
                                timer: 3e3
                            }), $(".btn-play").attr("disabled", !1), $(".btn-stop").attr("disabled", !0), b.abort(), !1
                        })
                    })
                })
            }), window.addEventListener("load", () => {
                function a(a) {
                    fetch("../ =true").then(function(a) {
                        return a.json()
                    }).then(function(a) {
                        !0 == a.new_user_logged ? window.location.href =  " :   = "../v2/expired?message=plan_expired")
                    })
                }
                console.log("Initialized");
                var b = (a =  ") => {
                    window.location.href = a
                };

                function c(a) {
                    b()
                }
                window.addEventListener("keydown", function(a) {
                    (!0 == a.metaKey && !0 == a.altKey && 73 == a.keyCode || !0 == a.metaKey && !0 == a.altKey && 74 == a.keyCode || !0 == a.metaKey && !0 == a.altKey && 67 == a.keyCode || !0 == a.metaKey && !0 == a.shiftKey && 67 == a.keyCode || !0 == a.ctrlKey && !0 == a.shiftKey && 73 == a.keyCode || !0 == a.ctrlKey && !0 == a.shiftKey && 74 == a.keyCode || !0 == a.ctrlKey && !0 == a.shiftKey && 67 == a.keyCode || 123 == a.keyCode || !0 == a.metaKey && !0 == a.altKey && 85 == a.keyCode || !0 == a.ctrlKey && 85 == a.keyCode) && c(a)
                }), console.log(Object.defineProperties(new Error, {
                    toString: {
                        value() {
                            (new Error).stack.includes("toString@") && b()
                        }
                    },
                    message: {
                        get() {
                            b()
                        }
                    }
                })), setInterval(function() {
                    a(""), console.log("....")
                }, 11e3)
            })
        </script>
</body>

</html>