<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem do sistema</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <main class="flex justify-center items-center w-full h-screen">
        <?php
        session_start();
        if (empty($_SESSION)) {
            header("location:../../index.html");
        }
        if (!empty($_SESSION['msg_success'])) :
        ?>
            <article class="w-2/4 bg-green-700 text-white flex flex-col items-center">
                <p class="p-4">
                    <?= $_SESSION['msg_success'] ?>
                </p>
                <a href="#" onclick="window.history.back()">Voltar</a>
            </article>
        <?php
        endif;
        unset($_SESSION['msg_success']);
        ?>
        <?php
        if (!empty($_SESSION['msg_error'])) :
        ?>
            <article class="w-2/4 bg-red-700 text-white flex flex-col items-center">
                <p class="p-4">
                    <?= $_SESSION['msg_error'] ?>
                </p>
                <a href="#" onclick="window.history.back()">Voltar</a>
            </article>
        <?php
        endif;
        unset($_SESSION['msg_error']);
        ?>
        <?php
        if (!empty($_SESSION['msg_warning'])) :
        ?>
            <article class="w-2/4 bg-orange-700 text-white">
                <ul class="p-4">
                    <?= $_SESSION['msg_warning'] ?>
                </ul>
                <a href="#" onclick="window.history.back()">Voltar</a>
            </article>
        <?php
        endif;
        unset($_SESSION['msg_warning'])
        ?>
    </main>
</body>

</html>