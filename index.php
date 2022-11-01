<?php
function sendMessage($data) {
    if (isset($data)) {

        $texto = implode("\n", $data);
        $texto = str_replace('Grupo de ofertas', '',$texto);
        $texto = str_replace($data['linkOld'], '',$texto);
        $texto = str_replace('🔵Telegram: https://t.me/cmdiasyoutube', '',$texto);
        $texto = str_replace('⚫️TIKTOK: https://bit.ly/37FrS9d', '',$texto);
        $texto = str_replace('🔴Ca', '🔗 Link:',$texto);
        $texto = str_replace('🔗 Link:', '',$texto);
        $texto = str_replace('Cupons e Promoções', 'Link:',$texto);
        $texto = str_replace('\n\n\n', '',$texto);
        $texto = str_replace('


', '',$texto);
        $texto = str_replace('

            ⚡️' , '',$texto);
        if(strpos($texto,'cmdiasyoutube') || strpos($texto,'www.iuriindica.com.br')) {
            return false;
        }
        $apiToken = "5673612930:AAEitE4ZgM6qxAWCsiNKFSqc6obcJgwX1V8";
        $data = [
            'chat_id' => '-1001532459123',
            'text' => $texto,
            'parse_mode' => 'HTML',
        ];
    $telegram =  file_get_contents( "https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));
    echo $telegram;
    }
}
function newAfiliate($productId)
{
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://portals.aliexpress.com/promote/generateShortLinkFromSc.do?productId=$productId&trackingId=default",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_HTTPHEADER => array(
            'cookie: ali_apache_id=33.1.233.213.1663966702576.189823.2; _fbp=fb.1.1663966704195.973797207; _gcl_au=1.1.1074355297.1663966704; e_id=pt80; _ym_uid=1663966705334441157; _ym_d=1663966705; cna=8Au1Gxq1OhUCAb0mk93UM/7L; _hvn_login=13; x_router_us_f=x_alimid=1978604476; aep_common_f=dJakg6F/370wgNx8HiQAa1+Rspfm0s+4JTIpV3SfAN1SjdzGhFi2GQ==; af_ss_a=1; af_ss_b=1; _gcl_dc=GCL.1666392339.Cj0KCQjwhsmaBhCvARIsAIbEbH7TPQ2kWFHbENsomuRc3-a8hYPmspQFtcbqHqTxOdH1CgViXCMstPoaAqv3EALw_wcB; account_v=1; _gid=GA1.2.884059867.1667225667; xlly_s=1; havana_tgc=eyJwYXRpYWxUZ2MiOnsiYWNjSW5mb3MiOnsxMzp7ImFjY2Vzc1R5cGUiOjEsIm1lbWJlcklkIjoxMzM0ODAxNjc5OTgsInRndElkIjoiNmZfUHpfZlNDNzdqY0kzc19HaXN4SEEifX19fQ; xman_us_t=x_lid=br379546476oulae&sign=y&rmb_pp=flaviomartil5@gmail.com&x_user=hJPi+gwiUs37J7HcTZR745GB6g/nR4m2OTP4Crt1sBI=&ctoken=qhdmjxdhqsqh&l_source=aliexpress; xman_f=OZv/zAp8uuOdbPX72/WJKGHzOXd/aSLy7Z3mQrF/7xGm7V7P7881CYyRxT4Op3AK5OAlbuYOhcvxxG66LQ/mnUdo1RoQ/zxjlBQXmczx224v9oUtTUbHFgJatQ8UL8KMDgaWkfVjPMBgE1Fqgbw9st2jzrYOgkwWmz5Tqsq2xXRsoW9YZXpDIW2/XbDnxlzSi7RoODf6n/6n8Ef1aQfjEqgfBUzGVBjtkAc6sYrD/1NhBU3LQFbe7YX2Y6Hs/dBnHE5Q8ixZXZCOznf0sgvhK3pwhHYXLlAz1BA8t2Ceud7qkQWWVDuwaFuZqK4mWUzvz7bCG57CXjk/sNr/aujc8KM4G3WfNOcuLyE0ezksvVhNZQ/XZTvRiUo3SPfZzW40QugQbjI51QjDohJe6MLsoB3kLtO9aUtLG+qU+zQPZ+c=; ali_apache_track=ms=|mt=1|mid=br379546476oulae; aep_usuc_f=site=bra&province=903200250000000000&city=903200250057000000&c_tp=BRL&x_alimid=1978604476&isfb=y&isb=y&region=BR&b_locale=pt_BR; traffic_se_co=%7B%7D; __utma=3375712.1342613897.1663966704.1667043657.1667292331.4; __utmz=3375712.1667292331.4.4.utmcsr=centinelapi.cardinalcommerce.com|utmccn=(referral)|utmcmd=referral|utmcct=/; _gac_UA-17640202-1=1.1667292657.CjwKCAjwh4ObBhAzEiwAHzZYU8qMW5TijyDioiDhT-wAXvzOxy2nKOWgO4BgqMZUJH9giLixwMZ9JxoCyWwQAvD_BwE; _gcl_aw=GCL.1667292657.CjwKCAjwh4ObBhAzEiwAHzZYU8qMW5TijyDioiDhT-wAXvzOxy2nKOWgO4BgqMZUJH9giLixwMZ9JxoCyWwQAvD_BwE; xman_us_f=x_locale=pt_BR&x_l=0&x_user=BR|BR|shopper|ifm|1978604476&x_lid=br379546476oulae&x_c_chg=0&x_as_i=%7B%22aeuCID%22%3A%22f9ce4f8974944a91ab009a1b45acbba0-1667293807290-07598-_DkKMEAr%22%2C%22affiliateKey%22%3A%22_DkKMEAr%22%2C%22channel%22%3A%22AFFILIATE%22%2C%22cv%22%3A%221%22%2C%22isCookieCache%22%3A%22N%22%2C%22ms%22%3A%221%22%2C%22pid%22%3A%223559243392%22%2C%22tagtime%22%3A1667293807290%7D&acs_rt=5fff9a0c0937444196a069b19e4a03dd; aeu_cid=f9ce4f8974944a91ab009a1b45acbba0-1667293807290-07598-_DkKMEAr; acs_usuc_t=x_csrf=l2w19bty4o1s&acs_rt=30008c531b4d4cc3bf3f08afe49f4351; intl_locale=pt_BR; AKA_A2=A; _m_h5_tk=a78122c9ac0f555d6f260edcc20f5ba8_1667307886390; _m_h5_tk_enc=5d8bfdbb9ca7baca9df70fbae3362213; _gat=1; _ym_isad=2; _ym_visorc=b; cto_bundle=PYCVBl80dmRpUk1JRjlLZ1R2Wlh5aU9RcjFsaHE2dVZJWGFKb0J2NWVwRUZjJTJGNlFNZEFoJTJGVkIlMkZ0WHU4NUsyTWtSekFVVVQ0bk9jc0FCZlkxciUyRjhraWxmbGdGMzA1RUdQOVFGendOVm5SQ25Jd3ZxVlhFa2pkaWdjb1VXTHJUaXk4VGFTUlpKSWhST016JTJCOVFzNTZRVEQlMkZldHclM0QlM0Q; _ga_VED1YSGNC7=GS1.1.1667306087.27.1.1667306097.0.0.0; _ga=GA1.1.1342613897.1663966704; aep_history=keywords%5E%0Akeywords%09%0A%0Aproduct_selloffer%5E%0Aproduct_selloffer%094000809070941%091005003667098748%094001286066455%091005003844066987%094001131364593%091005003787615787%091005004590735784%091005003504164690; RT="z=1&dm=aliexpress.com&si=10b70656-02da-4cb7-97df-ed5c5a01a5e9&ss=l9y700kg&sl=1&tt=270&rl=1&ld=272"; JSESSIONID=5E772435950707D92A46F54B9156C4DF; xman_t=wwjaGi+ruIZa9BK57cS307CyVIoWFhNmFgFP2ugemeMf0WXsYbxsp1TS9BShLBevFN1LkCXqQTBLvWi+KhjPwuTsowRAr/iGxvkWiTuxihVZSl7tB243AVRCF3qdtrQn+wL3eisdTj+vsfTb2Wyp8owPY/wNK2pWaf+oQAvBB93z86AsUDVIICxIK4xGW7sxG7matVEUSAmFlBC/jh0fIZ7dKoeTzr8VIOb0iyrEe9e89rmAAcBZnxDT6PAZGD8EGTaxP5zLmIb/qL1w4yPaAQn9RMzeBMciddQoVzN2mNO0srOvZxwJ2hSFGo/2hZE8FMjwvn6VGsAecRIt/oh+GbVPHjE6JXlsm0d9thp9O/ikivvakzD71GScceKdG/Jfd8RjWPa3tfs07GLAoAH2ig1U38USrcaH1I9ZQtX+RsgU+OL0CrX8mAJxFX/CRaATFMK4CkAgWduSW2iE3YKFtvTaD8gOPD0yv37hSz39hbBaWCcT4UAU79ax1zX4kgUAAbG7NyetLoxozyVKtEJFH5uGrTtziC/Tpq5a/Op3Lp7fE5s1geXBHAAGcV58+wglYFkjKRe3Xx5ewlrfTLPCTJS0fk6jyqyJUBEVM6dRv/GcOqaMjl3OCEVRvWbbfioQ7WhiFcW+P/3bdgARiskxK/4MPSf6Tu2junf6i2h+YmbL72nZt7808zDTNQcEJwbe; intl_common_forever=CzahuLAYiqQt1bn9Q9UR4IbI3+PUHcczUovrIGZTsaoPOf27w0gyew==; l=eBI9FG6lTS-1YzajBO5whurza77OBBRfhsPzaNbMiInca6TCCF_ViNCUcrYDAdtjQtff9etruS5yBd3pWZz5jncmI6Yjx342xDve-; tfstk=cmmVB7NfLwI5V6H99uqZYiqMdswfZDHmIgyQoCmYzM_Num4ciBfTE6DUUR6Psrf..; isg=BAoK9e0lXSSikdHH2VyXVs22W_ms-45Vzw93TpRFS93oR6wBfIkdZQTxU6ubtwbt; acs_usuc_t=x_csrf=7ugb0xvtoid4&acs_rt=2beec2793b2645b6ab6b2419b0ab0c12; ali_apache_id=33.19.92.58.1667306172496.519581.0; ali_apache_track=; ali_apache_tracktmp=; e_id=pt70; xman_f=0fxNbNkIXtctQhNXi4QlhxQlLmyQgHlLScliZU5Ndb1a6+L5DNg6jXv62DYGSu31Mo0btwsL/z3gjmnmnHzj8IZKiHufw0C5VQXoRuKsrjdkjYWzPATAow==; xman_t=yCrAOgMeendbg9bGrxIWGu1znIzU+FjLj4nDjceOHRfsrlYozDxlWA/xkTBVB4zfZR0iRmtIL1RnlwutSABjvSEUyua6pOgTo7Dyn2pM5Az2D03GK5J1tByk3JqhjxA/OEzoLgrMIpKxaY2qppeZtMw7q/9Ct+ZAsgtQcyfnTZ/24/sDncHC3fKnNNmfT2jgXH5wqDYeia45gXYOVWPZknLtE/bKurcZFeI4sB4X2vO6EeXEecw1DRyb1Dx0njCbwEN95ebvNNBQ6KtJGSSRnCRDMjmNCA1wOk47/tuCMxesJvdfR3UZg4T/D8XVflO12FgukvK0k0OJe3LP9Yb9CSO5npHw5Eki7PLpyjBc7RBksmPvf3EnseN8sp4RbwFFlAaUPqvkUmqwz1b2oCy8I23J3tVeWs8D6baHtwZBlh0Va6Xshi2GyKd24D9vCjSYFPobsGMuUwpneYs3G1z7itE2HwXKiQugHY1Fi4uZf5EDz5jHNLq1HjwbkwOua5Vuk54oxaxhAkWG0cWe9tzugkoBBsf41ANnmibHffq64HCVLkBexB6KCGcba2wxp1OH7lFpIeg62Ainfk6u7UuuY0VEjYBemhbhLQdbnQLeD86LS6fe51vNedX2dCGrABAw9gbbooNgV9CA21ZH/x8gqfeQUlfbeyJ9f3HyNynoDhCXqfnVhnbQD7TboY4/bx3d; xman_us_f=x_l=0&acs_rt=2beec2793b2645b6ab6b2419b0ab0c12; JSESSIONID=472E2CBC4C3EC1181227B8C0D85AC3BD'
        ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    $linkNovo = json_decode($response);
    return $linkNovo->data[0];
}

function getRealLink($dados)
{
    $context = stream_context_create(
        array(
            'http' => array(
                'follow_location' => false
            )
        )
    );
    $html = file_get_contents('https://' . $dados['link'], false, $context);
    $productId = implode(',', $http_response_header);
    $productPos = strpos($productId, 'Location: ') + 42;
    $fimPos = strpos($productId, '.html?aff');
    $productId = substr($productId, $productPos, $fimPos - $productPos);

    if ($productId) {
        $dados['linkOld'] = 'https://'. $dados['link'];
        $dados['link'] = newAfiliate($productId);
        sendMessage($dados);
    }
}
    if (!empty($_POST)) {
        if (strpos($_POST['newMessage'],'https://amzn.to')) {
       return false;
        }
        if (!empty($_POST['photo'])) {
            $photo = $_POST['photo'];
        }

        $mensagem = $_POST['newMessage'];
        $pos_link = strpos($mensagem, 's.click.aliexpress.com');
        $pos_link_fim = strpos($mensagem, 'com') + 14;
        $link = substr($mensagem, $pos_link, $pos_link_fim - $pos_link);
        $posTitulo = strpos($mensagem, '💵');
        $cupomPos = strpos($mensagem, 'Cupom');
        $cupom = substr($mensagem, $cupomPos, $pos_link - $cupomPos - 4);
        $titulo = substr($mensagem, 0, $posTitulo);
        $posFimValor = strpos($mensagem, '12x');
        $valor = substr($mensagem, $posTitulo, (($posFimValor + 3) - $posTitulo));

        $dados = [
            'titulo' => $titulo,
            'valor' => $valor,
            'link' => $link
        ];

        if (!empty($dados)) {
            getRealLink($dados);
        }
    }


