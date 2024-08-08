public function login()
{
$session = session();
$model = new UserModel();

$username = $this->request->getVar('username');
$password = $this->request->getVar('password');

// Tidak ada validasi eksplisit untuk username, jadi tidak perlu menghapus aturan validasi

$data = $model->where('username', $username)->first();

if ($data) {
$pass = $data['password'];
$authenticatePassword = password_verify($password, $pass);
if ($authenticatePassword) {
$ses_data = [
'id' => $data['id'],
'username' => $data['username'],
'email' => $data['email'],
'logged_in' => TRUE
];
$session->set($ses_data);
return redirect()->to('/dashboard');
} else {
$session->setFlashdata('msg', 'Wrong Password');
return redirect()->to('/login');
}
} else {
$session->setFlashdata('msg', 'Username not Found');
return redirect()->to('/login');
}
}