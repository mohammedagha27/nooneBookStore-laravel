@extends('library.master')

@section('title', 'content-us')
@section('content')

    <!-- Page Header-->
    <header class="masthead"
        style="background-position: center !important;background-image: url({{ asset('libraryasset/assets/img/contact-us.jpg') }})">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>! أتصل بنا</h1>
                        <span class="subheading">فريق مختص للاجابة على جميع استفساراتكم</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-10 col-xl-10">
                    <p class="con-p " style="text-align: center">يسعدنا الإجابة على جميع استفساراتكم حول منتجاتنا من خلال تواصلكم مع خدمات العملاء</p>
                    <div class="container-form">
                        <div class="screen">
                            <div class="screen-header">
                                <div class="screen-header-left">
                                    <div class="screen-header-button close"></div>
                                    <div class="screen-header-button maximize"></div>
                                    <div class="screen-header-button minimize"></div>
                                </div>
                                <div class="screen-header-right">
                                    <div class="screen-header-ellipsis"></div>
                                    <div class="screen-header-ellipsis"></div>
                                    <div class="screen-header-ellipsis"></div>
                                </div>
                            </div>
                            <div class="screen-body">
                                <div class="screen-body-item left">
                                    <div class="app-title">
                                        <span>CONTACT</span>
                                        <span>US</span>
                                    </div>
                                    <div class="app-contact">CONTACT INFO : +62 81 314 928 595</div>
                                </div>
                                <div class="screen-body-item">
                                    <div class="app-form">
                                        <div class="app-form-group">
                                            <input class="app-form-control" placeholder="NAME" value="Krisantus Wanandi">
                                        </div>
                                        <div class="app-form-group">
                                            <input class="app-form-control" placeholder="EMAIL">
                                        </div>
                                        <div class="app-form-group">
                                            <input class="app-form-control" placeholder="CONTACT NO">
                                        </div>
                                        <div class="app-form-group message">
                                            <input class="app-form-control" placeholder="MESSAGE">
                                        </div>
                                        <div class="app-form-group buttons">
                                            <button class="app-form-button">CANCEL</button>
                                            <button class="app-form-button">SEND</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

@stop
@section('stayls')
    <style>
    *, *:before, *:after {
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}



body, button, input {
  font-family: 'Montserrat', sans-serif;
  font-weight: 700;
  letter-spacing: 1.4px;
}

.background {
  display: flex;
  min-height: 100vh;
}

.container-form {
  flex: 0 1 700px;
  margin: auto;
  padding: 10px;
}

.screen {
  position: relative;
  background: #3e3e3e;
  border-radius: 15px;
}

.screen:after {
  content: '';
  display: block;
  position: absolute;
  top: 0;
  left: 20px;
  right: 20px;
  bottom: 0;
  border-radius: 15px;
  box-shadow: 0 20px 40px rgba(0, 0, 0, .4);
  z-index: -1;
}

.screen-header {
  display: flex;
  align-items: center;
  padding: 10px 20px;
  background: #4d4d4f;
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
}

.screen-header-left {
  margin-right: auto;
}

.screen-header-button {
  display: inline-block;
  width: 8px;
  height: 8px;
  margin-right: 3px;
  border-radius: 8px;
  background: white;
}

.screen-header-button.close {
  background: #ed1c6f;
}

.screen-header-button.maximize {
  background: #e8e925;
}

.screen-header-button.minimize {
  background: #74c54f;
}

.screen-header-right {
  display: flex;
}

.screen-header-ellipsis {
  width: 3px;
  height: 3px;
  margin-left: 2px;
  border-radius: 8px;
  background: #999;
}

.screen-body {
  display: flex;
}

.screen-body-item {
  flex: 1;
  padding: 50px;
}

.screen-body-item.left {
  display: flex;
  flex-direction: column;
}

.app-title {
  display: flex;
  flex-direction: column;
  position: relative;
  color: #ea1d6f;
  font-size: 26px;
}

.app-title:after {
  content: '';
  display: block;
  position: absolute;
  left: 0;
  bottom: -10px;
  width: 25px;
  height: 4px;
  background: #ea1d6f;
}

.app-contact {
  margin-top: auto;
  font-size: 8px;
  color: #888;
}

.app-form-group {
  margin-bottom: 15px;
}

.app-form-group.message {
  margin-top: 40px;
}

.app-form-group.buttons {
  margin-bottom: 0;
  text-align: right;
}

.app-form-control {
  width: 100%;
  padding: 10px 0;
  background: none;
  border: none;
  border-bottom: 1px solid #666;
  color: #ddd;
  font-size: 14px;
  text-transform: uppercase;
  outline: none;
  transition: border-color .2s;
}

.app-form-control::placeholder {
  color: #666;
}

.app-form-control:focus {
  border-bottom-color: #ddd;
}

.app-form-button {
  background: none;
  border: none;
  color: #ea1d6f;
  font-size: 14px;
  cursor: pointer;
  outline: none;
}

.app-form-button:hover {
  color: #b9134f;
}

.credits {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
  color: #ffa4bd;
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 16px;
  font-weight: normal;
}

.credits-link {
  display: flex;
  align-items: center;
  color: #fff;
  font-weight: bold;
  text-decoration: none;
}

.dribbble {
  width: 20px;
  height: 20px;
  margin: 0 5px;
}
.con-p{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif !important
}
@media screen and (max-width: 520px) {
  .screen-body {
    flex-direction: column;
  }

  .screen-body-item.left {
    margin-bottom: 30px;
  }

  .app-title {
    flex-direction: row;
  }

  .app-title span {
    margin-right: 12px;
  }

  .app-title:after {
    display: none;
  }
}

@media screen and (max-width: 600px) {
  .screen-body {
    padding: 40px;
  }

  .screen-body-item {
    padding: 0;
  }
}

    </style>

@stop
