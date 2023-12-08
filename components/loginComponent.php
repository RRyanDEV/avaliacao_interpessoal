<?php 

function loginComponent(){
    return '<div class="flex justify-center flex-col items-center h-screen">
    <form method="post">
        <div
            class="bg-white shadow-2xl flex flex-col space-y-6 rounded-md p-11">
            <div class="flex flex-col items-center p-3 justify-center w-full">
                <h1 class="text-4xl text-black font-bold">Login</h1>
                <p
                    class="font-light text-2xl tracking-wide text-center text-black">Use
                    suas
                    credenciais para
                    logar</p>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label
                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Email
                        <i class="fas fa-envelope text-gray-700"></i>
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        name="email" required type="text">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label
                        class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                        Senha
                        <i id="togglePassword"
                            class="fas fa-eye cursor-pointer text-gray-700"></i>
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        name="password" required id="id_password"
                        type="password">
                </div>
                <div
                    class="pt-11 w-full flex flex-wrap space-x-5 pb-6 justify-center">
                    <div id="button-login">
                        <input
                            class="bg-blue-400 hover:bg-blue-800 text-gray-800 hover:text-white font-semibold py-1 px-2 border border-gray-400 rounded shadow"
                            type="submit" name="submit" value="Entrar">
                    </div>
                    <div class="criarconta">
                        <a href="../pages/register.php">
                            <div
                                class="bg-emerald-400 hover:bg-emerald-700 text-gray-800 hover:text-white font-semibold py-1 px-2 border border-gray-400 rounded shadow">
                                Criar Conta
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>';
}

?>


