// RANDOM PASSWORD GENERATOR
function getPassword() {
  let chars =
    '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ......-----'
  const passwordLength = 19
  let password = ''

  for (let i = 0; i < passwordLength; i++) {
    let randomNumber = Math.floor(Math.random() * chars.length)
    password += chars.substring(randomNumber, randomNumber + 1)
  }
  document.getElementById('password').value = password
}
let btn = document.getElementById('btn')
btn.addEventListener('click', getPassword, textChange)
// SUPER BUTTON
const superBtn = document.getElementById('btn')
const password = document.getElementById('password')

superBtn.addEventListener('click', textChange)

function textChange() {
  superBtn.classList.toggle('clicked')
  // 1. Select the text
  password.select()

  // 2. Copying the text
  document.execCommand('Copy')
}
