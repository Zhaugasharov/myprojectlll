import React, { Component } from 'react';
import Header from './parts/Header';

class AdvertForm extends Component{
    constructor(props){
        super(props);
        this.state = {
            user: props.user
        };
    }

    render(){
        return (
            <div>
                <Header user={this.state.user}/>
            </div>
        );
    }

}

export default AdvertForm;