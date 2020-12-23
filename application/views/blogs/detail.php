<main>
    <div class="suggest_main">
        <td class="text_right">
            <a class="a_class" href=<?php echo $html->linkSrc("blogs", "detail", (int)$blog[0]["Blog"]["id"], 1) ?>>prev</a>
        </td>
        <div class="suggest">
            <div class="card_suggest">
                <table>
                    <tr >
                        <th colspan="2" style="font-size: 25px; text-align: center;"><?php echo  $blog[0]["Blog"]["title"]; ?></th>
                    </tr>
                    <tr>
                        <td style="width:200px;">
                            <?php $img = explode('.', $blog[0]["Blog"]["imgname"]); ?>

                            <img height="200" <?php echo $html->includeImg("$img[0]", "$img[1]"); ?> alt="No" />

                        </td>
                        <td style="font-family: SemiB;">
                            <?php echo  $blog[0]["Blog"]["content"]; ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <td>
            <a class="a_class" href=<?php echo $html->linkSrc("blogs", "detail", (int)$blog[0]["Blog"]["id"], 2) ?>>next</a>
        </td>
    </div>
</main>
</div>