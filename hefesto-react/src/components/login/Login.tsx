import * as React from 'react';
import './Login.css';

const msg = {
    main_framework: "HFS",
    main_app_title: "Hefesto"
}

class Login extends React.Component {

    render() {
        return (
            <div>

                <nav className="navbar navbar-expand-sm bg-dark navbar-dark">
                    <a className="navbar-brand" id="anchorHomePage" href="/login.html">
                        <span>{msg.main_framework}</span>&nbsp;
                        <span>{msg.main_app_title}</span>
                    </a>
                </nav>

                <div className="container-fluid Login-container">
                <div id="tela-login" className="Login-tela">
                    <div className="card" id="tela-login">
                        <div className="card-header Login-title">login.title</div>
                        <div className="card-body">
                        
                            <form name="formLogin" action="/login.html" method="POST">
                                        
                                <div className="form-group">
                                    <label htmlFor="username">login.username</label>
                                    <div className="input-group">
                                        <div className="input-group-append">
                                            <button className="btn btn-primary" type="button" disabled>
                                                <i className="fas fa-user fa-sm"></i>
                                            </button>
                                        </div>	
                                        <input type="text" className="form-control" name="username" id="username" autoFocus required 
                                            placeholder="login.username.placeholder" />
                                    </div>
                                </div>
                                <div className="form-group">
                                    <label htmlFor="password">login.password</label>
                                    <div className="input-group">
                                        <div className="input-group-append">
                                            <button className="btn btn-primary" type="button" disabled>
                                                <i className="fas fa-lock fa-sm"></i>
                                            </button>	
                                        </div>	
                                        <input type="password" className="form-control" name="password" id="password" required
                                            placeholder="login.password.placeholder" autoComplete="off" />
                                    </div>
                                </div>
                                <div className="form-group">
                                    <label htmlFor="remember-me">login.rememberme</label>						
                                    <input type="checkbox" name="remember-me" id="remember-me" />
                                </div>
                                <div className="form-group">
                                    <div className="Login-button">
                                        <button type="submit" className="btn btn-success btn-icon-split" id="btnLogin">
                                            <span className="icon text-white-50">
                                                <i className="fa fa-sign-in" aria-hidden="true"></i>
                                            </span>
                                            <span className="text">login.button</span>
                                        </button>
                                    </div>
                                </div>
                            
                            </form>	
                            
                        </div>
                        <div className="card-footer">
                            <a id="anchorForgotPassword" href="#" className="Login-forgotPassword"><span>login.forgotPassword</span></a>
                            
                            <button type="button" className="btn btn-primary btn-icon-split Login-btnBecomeMember" id="btnBecomeMember">
                                <span className="text">login.becomeMember</span>								
                            </button>
                        </div>						
                    </div>
                </div>	
                </div>

            </div>
        );
    }
}

export default Login;
