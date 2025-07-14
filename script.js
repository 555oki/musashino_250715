document.getElementById('userForm').addEventListener('submit', function(event) {
    const username = document.getElementById('username').value.trim();

    if (username === '') {
        alert('名前を入力してください。');
        event.preventDefault();  // 送信を中止
    } else {
        alert(`入力された名前: ${username} を送信します。`);
        // 入力が問題なければフォーム送信を許可
    }
});
