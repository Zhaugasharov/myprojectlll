require('./bootstrap');
import React, {Component} from 'react';
import {render} from 'react-dom';
import {Router, Route} from 'react-router';
import {BrowserRouter} from 'react-router-dom';
import AdvertForm from './components/AdvertForm';

class App extends Component{

    constructor(props){
        super(props);
        this.state = {
            data: {},
            user: {}
        };
    }

    componentWillMount(){
        let data = [];
        let user = [];

        if(window.localStorage && localStorage.getItem('data') != null){
            data = localStorage.getItem('data');
            this.setState({data: data});
        }

        if(data.length == 0){
            axios.get('/ajax/static-data').then(function(response){
                if(!window.localStorage)
                    data = response;
                else
                    localStorage.setItem('data', response);
            });
        }

        axios.get('/ajax/user').then(function(response){
            user = response;
        });

        this.setState({
            data: data,
            user: user
        });
    }

    render (){
        return(
            <BrowserRouter>
                <div>
                    <Route exact path={'/advert/save'}>
                        <AdvertForm user={this.state.user}/>
                    </Route>
                </div>
            </BrowserRouter>
        );
    };

}

render(<App/>, document.getElementById('root'));

