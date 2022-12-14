import React, { Component } from 'react'
import ReactDOM from 'react-dom/client';
import axios from 'axios';

class AxioPostuser extends Component {
    constructor(props)
    {
        super(props)
        this.state={
            username:'',
            password:'',
            email:'',
            name:'',
            location:'',
            phone:'',
            type: '',
        }
    }


    changeHandler = (e) =>{
    this.setState({[e.target.name]: e.target.value})
    
    }

    submitHandler = (e) =>{
        e.preventDefault()
        this.setState()
        console.log(this);
        axios.post('http://localhost:8000/api/users/list', this.state)
        .then(response=>{
            console.log(response)
        })
        .catch(error =>{
            console.log(error)
        })
    }


    render() {
        const {username,password,email,name,location,phone,type}=this.state
        return (
            <div class="container">
                <h2 class="text-center">AddUser</h2>
                    <form onSubmit={this.submitHandler}>
                        <center>
                        <table>
                        <tbody>
                        <tr>
                            <td>
                                <label for="username">Username</label>
                            </td>

                            <td>
                                :<input type="text" name="username" value={username}  onChange={this.changeHandler} />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="password">Password</label>
                            </td>

                            <td>
                                :<input type="text" name="password" value={password}  onChange={this.changeHandler} />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="email">Email</label>
                            </td>

                            <td>
                                :<input type="text" name="email" value={email}  onChange={this.changeHandler} />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="name">Name</label>
                            </td>

                            <td>
                                :<input type="text" name="name" value={name}  onChange={this.changeHandler} />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="location">Location</label>
                            </td>

                            <td>
                                :<input type="text" name="location" value={location}  onChange={this.changeHandler} />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="phone">Phone</label>
                            </td>

                            <td>
                                :<input type="number" name="phone" value={phone}  onChange={this.changeHandler} />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="type">Usertype</label>
                            </td>

                            <td>
                            <select name="type" value={type}  onChange={this.changeHandler} required>
                                <option value="admin">Admin</option>
                                <option value="manager">Manager</option>
                                <option value="doctor">Doctor</option>
                                <option value="patient">Patient</option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                        <button class="btn btn-small btn-small-primary" type="submit">submit</button>
                        </tr>
                        </tbody>
                        </table>
                        </center>
                    </form> 
            </div>
        );
    }
}


export default AxioPostuser;



if (document.getElementById('axiopostuser')) {
    const Index = ReactDOM.createRoot(document.getElementById("axiopostuser"));

    Index.render(
        <React.StrictMode>
            <AxioPostuser/>
        </React.StrictMode>
    )
}
