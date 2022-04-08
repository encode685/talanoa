import { Amplify } from 'aws-amplify';
import { withAuthenticator } from '@aws-amplify/ui-react';
import '@aws-amplify/ui-react/styles.css';
import awsExports from './aws-exports';
import logo from './talanoa-no-name.png';
import './App.css';

Amplify.configure(awsExports);

function App({ signOut, user }) {
  return (
    <>
      <h1>Talofa and Welcome to Talanoa {user.username}</h1>

      <button onClick={signOut}>Sign out</button>
      <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
        <p>
          <code>Network, Dialogue, Solve.</code>
        </p>
        
      </header>
    </div>

    </>
  );
}

export default withAuthenticator(App);