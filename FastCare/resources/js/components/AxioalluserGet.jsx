import React, { Component } from 'react'
import ReactDOM from 'react-dom';
import axios from 'axios';

class AxioalluserGet extends Component {
    state = {
        posts: []
        }
    
        componentDidMount() {
        axios.get('http://localhost:8000/api/users/list')
        .then(response => {
            const posts = response.data;
            this.setState({posts});
        })
        }

        render(){
            return(
                <div class="container">
                <table class="table">
                <thead>
                    <tr class="bg-danger">
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Name</th>
                        <th scope="col">Location</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Type</th>
                    </tr>
                </thead>
                <tbody>
                    {this.state.posts && this.state.posts.map(post => 
                        <tr>
                            <td scope="row">{post.user_id}</td>
                            <td>{post.username}</td>
                            <td>{post.email}</td>
                            <td>{post.name}</td>
                            <td>{post.location}</td>
                            <td>{post.phone}</td>
                            <td>{post.type}</td>
                        </tr>)}
                </tbody>
            </table>
            </div>
    
            )
        }
}

export default AxioalluserGet;

if (document.getElementById('axioalluserget')) {
    const Index = ReactDOM.createRoot(document.getElementById("axioalluserget"));

    Index.render(
    <React.StrictMode>
        <AxioalluserGet/>
    </React.StrictMode>
)
}
