import React, {Component} from 'react';

class Header extends Component{
    render(){
        let user = this.props.user;
        let AuthMenu = (
            <div className="btn-group  dropleft float-right mt-3 mr-5">
                <a href="#" className="dropdown-toggle underline-none" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i className="fa fa-user"></i>
                </a>
                <div className="dropdown-menu">
                    <a className="dropdown-item" href="#">Sign in</a>
                    <a className="dropdown-item" href="#">Sign up</a>
                </div>
            </div>
        );

        if(user.length != 0){
            AuthMenu = (
                <a href="/profile">{user.fullname}</a>
            );
        }

        return (
            <div className="header mb-2">
                <div className="container">
                    <div className="row">
                        <div className="col-md-2">
                            <a href="/">
                                <img src="/img/logo.png" alt=""/>
                            </a>
                        </div>
                        <div className="col-md-10">
                            {AuthMenu}
                            <a href="/advert/save" className="btn mr-4 mt-3 btn-sm btn-outline-success float-right">
                                <i className="fa fa-plus"></i> Add advert
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default Header;