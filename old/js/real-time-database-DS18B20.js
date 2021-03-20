
var watch = (() => {
    const dataInput = document.querySelector("#dataInput");
    const tempInput = document.querySelector("#tempInput");

    const Data1Input = document.querySelector("#Data1Input");
    const Data2Input = document.querySelector("#Data2Input");
    const userList = document.querySelector("#userList");
  
    const resetForm = () => {
        dataInput.value = '';
        tempInput.value = '';
        Data1Input.value = '';
        Data2Input.value = '';
    }
  
    const userListView = (snapshot) => {
      userList.innerHTML = '';
      snapshot.forEach(item => {
        let li = document.createElement('li');
        li.appendChild(document.createTextNode(item.val().Data1 + ': ' + item.val().Data2));

//        li.appendChild(document.createTextNode(item.val().data + ': ' + item.val().temp));
        userList.appendChild(li);
      });
    }
  
    return {
      init: () => {
        firebase.database().ref('Test').on('value', userListView);
//        firebase.database().ref('NodeMCU_1:9').on('value', userListView);
//        firebase.database().ref('NodeMCU_1:9').on('value', userListView);
        
      }
    }
    
  })();
  
  watch.init();
  