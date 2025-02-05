<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seamless Resource Keeper</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
    <!-- <script src="bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <link rel="stylesheet" href="index.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>
    <!-- <script src="vue-router.global.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="text-light">
    <div id="pc-warning">Please use a mobile device to continue using Seamless Resource Keeper.</div>
    <div id="app" class="container">
        <div>
            <nav class="navbar navbar-light">
                <div class="container-fluid">
                    <div class="navbar_title" v-on:click="gotoHome()">Seamless <br> Resource Keeper</div>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <i class="fas fa-bars" style="color: white;"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="collapse_menu_items text-center">
                            <div :class="['collapse_item', { active: current_page === 'Home' }]" v-on:click="openPage('Home')">Home</div>
                            <div :class="['collapse_item', { active: current_page === 'Dashboard' }]" v-on:click="openPage('Dashboard')">Dashboard</div>
                            <div :class="['collapse_item', { active: current_page === 'My Books' }]" v-on:click="openPage('My Books')">My Books</div>
                            <div :class="['collapse_item', { active: current_page === 'Profile' }]" v-on:click="openPage('Profile')">Profile</div>
                            <div> <a href="#" class="link-danger collapse_item">Log-Out</a> </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div>
            <h2>We're in {{ current_page }} Page Right Now!</h2>
        </div>
    </div>
    <script>
        var app = Vue.createApp({
            data() {
                return {
                    current_page: "Home"
                };
            },
            mounted() {},
            methods: {
                openPage(page){
                    this.current_page = page;

                    const myCollapse = document.getElementById('navbarNav');
                    const bsCollapse = new bootstrap.Collapse(myCollapse, {
                        toggle: true
                    });
                },
                gotoHome(){
                    this.current_page = "Home"
                },
            },
        });  
        app.mount("#app");
    </script>
</body>
</html>
