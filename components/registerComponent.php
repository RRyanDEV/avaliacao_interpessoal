<?php 

function registerComponent(){
    return '<div class="flex justify-center flex-col items-center h-screen">
    <form method="post">
        <div
            class="bg-gradient-to-br from-slate-500 to-slate-700 shadow-2xl flex flex-col space-y-6 rounded-md p-11">
            <div
                class="flex flex-col items-center p-3 justify-center w-full">
                <h1 class="text-5xl text-white font-bold">Cadastro</h1>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label
                        class="block uppercase tracking-wide text-white text-xs font-bold mb-2">
                        Nome Completo
                        <i class="fas fa-user text-white"></i>
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        name="username" required type="text">
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label
                        class="block uppercase tracking-wide text-white text-xs font-bold mb-2">
                        Email
                        <i class="fas fa-envelope text-white"></i>
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        name="email" required type="text">
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label
                        class="block uppercase tracking-wide text-white text-xs font-bold mb-2">
                        Senha
                        <i id="togglePasswordR"
                            class="fas fa-eye cursor-pointer text-white"></i>
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        name="password" required id="id_passwordR"
                        type="password">
                </div>
                <div
                    class="pt-11 w-full flex flex-wrap space-x-5 pb-6 justify-center">
                    <div id="button-login">
                        <input
                            class="bg-blue-400 hover:bg-blue-800 text-gray-800 hover:text-white font-semibold py-1 px-2 border border-gray-400 rounded shadow"
                            type="submit" name="submit"
                            value="Criar Conta">
                    </div>
                    <div id="voltar">
                        <a href="../pages/login.php">
                            <div
                                class=" bg-emerald-400 hover:bg-emerald-700 text-gray-800 hover:text-white font-semibold py-1 px-2 border border-gray-400 rounded shadow">
                                Voltar
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