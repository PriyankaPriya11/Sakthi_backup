var firebaseConfig={apiKey:"AIzaSyD29PNvdSADOkfcR5c0LESwMFnnD8-0IbE",authDomain:"my-first-project-firebas-37be7.firebaseapp.com",databaseURL:"https://my-first-project-firebas-37be7.firebaseio.com",projectId:"my-first-project-firebas-37be7",storageBucket:"",messagingSenderId:"605942348952",appId:"1:605942348952:web:a486ff4bf8002d96"};firebase.initializeApp(firebaseConfig);var database=firebase.database();firebase.auth().onAuthStateChanged(function(user){if(user){document.getElementById('firebaseui-auth-container').style.display='none';var displayName=user.displayName;var email=user.email;var emailVerified=user.emailVerified;var photoURL=user.photoURL;var isAnonymous=user.isAnonymous;var uid=user.uid;var providerData=user.providerData;console.log(user,'user signed in');document.getElementById('quickstart-sign-in').style.display='block';document.getElementById('favorite').style.display='block';if(firebase.auth().currentUser){var userId=firebase.auth().currentUser.uid;firebase.database().ref('/users/'+userId).once('value').then(function(snapshot){var snap=snapshot.val();if(snap.favorite==undefined||snap.favorite!='yes'){document.getElementById('favorite').textContent='Add to Favorites'}else{document.getElementById('favorite').textContent='Remove Favorites'}
return!1})}}else{document.getElementById('firebaseui-auth-container').style.display='block';document.getElementById('quickstart-sign-in').style.display='none';document.getElementById('favorite').style.display='none';console.log('user signed out')}});var uiConfig={callbacks:{signInSuccessWithAuthResult:function(authResult,redirectUrl){var user=authResult.user;var credential=authResult.credential;var isNewUser=authResult.additionalUserInfo.isNewUser;var providerId=authResult.additionalUserInfo.providerId;var operationType=authResult.operationType;var email=authResult.additionalUserInfo.profile.email;var name=authResult.additionalUserInfo.profile.name;var imageUrl=authResult.additionalUserInfo.profile.picture;var localId=authResult.user.uid;console.log(authResult,"authResult");firebase.database().ref('users/'+localId).set({displayName:name,email:email,photoUrl:imageUrl,providerId:providerId});return!0},signInFailure:function(error){return handleUIError(error)},uiShown:function(){document.getElementById('loader').style.display='none'}},credentialHelper:firebaseui.auth.CredentialHelper.ACCOUNT_CHOOSER_COM,queryParameterForWidgetMode:'mode',queryParameterForSignInSuccessUrl:'signInSuccessUrl',signInFlow:'popup',signInSuccessUrl:'https://www.askantech.com/amp_test/Caddy.html',signInOptions:[firebase.auth.GoogleAuthProvider.PROVIDER_ID,{provider:firebase.auth.EmailAuthProvider.PROVIDER_ID,requireDisplayName:!0}],immediateFederatedRedirect:!1,tosUrl:'<your-tos-url>',privacyPolicyUrl:function(){window.location.assign('<your-privacy-policy-url>')}};var ui=new firebaseui.auth.AuthUI(firebase.auth());ui.start('#firebaseui-auth-container',uiConfig);window.onload=function(){var el=document.getElementById('quickstart-sign-in');var fl=document.getElementById('favorite');if(el){el.addEventListener('click',function(){if(firebase.auth().currentUser){firebase.auth().signOut();document.getElementById('firebaseui-auth-container').style.display='block'}},!1)}
if(fl){fl.addEventListener('click',function(){if(firebase.auth().currentUser){var userId=firebase.auth().currentUser.uid;firebase.database().ref('/users/'+userId).once('value').then(function(snapshot){var snap=snapshot.val();if(snap.favorite==undefined||snap.favorite!='yes'){firebase.database().ref('users/'+userId).update({favorite:'yes'});document.getElementById('favorite').textContent='Remove Favorites'}else{firebase.database().ref('users/'+userId).update({favorite:'No'});document.getElementById('favorite').textContent='Add to Favorites'}
return!1})}},!1)}}