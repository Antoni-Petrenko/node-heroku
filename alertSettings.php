<!--  Блок настройки уведомлений     -->      
<!-- после col-md-12 notification -->
<div class='col-md-12'>
                        <style>
                                .castom-box-body{
                                    display: flex;
                                    flex-flow: row wrap
                                }

                                .castom-box-body h2{
                                    width: 100%;
                                }
                                .castom-box-body div{
                                    min-width: 50%;
                                }
                                .castom-box-body form{
                                flex-grow: 1;
                                }
                        </style>
                        <div class='box collapsed-box'>
                            <div  data-widget='collapse' data-toggle='tooltip' class='box-header with-border'>
					            <h3 class='box-title'>Настройка оповещений</h3>
                                    <div class='box-tools pull-right'>
                                        <button class='btn btn-box-tool' data-widget='collapse' data-toggle='tooltip' title='' data-original-title='Свернуть'><i class='fa fa-plus'></i></button>
                                    </div>
                        </div>
                        <div class="box-body ">
                            <div class="castom-box-body">
                                <h2 class="h3" style="width:100%">Выбирите способ получения важной информации от <strong>STEKO</strong></h2>
                            <div style="padding:10px" >  
                                    <p>(Расходные накладные,информация о доставке, рекламация, о проведении оплаты и т.д)</p>
                                    <h4>Получать сообщения</h4>
                                    <p>*Подтвердите ваши контакті дла оповещения</p>
                            </div>

                            <form style="padding:10px" id="alertSettings" >
                                    <table class="table table-bordered">
                                        <input type="text" value="<?php echo $_SESSION['id']; ?>" style="display:none" id="user-checkbox" name="dealer_id">
                                        <tbody>
                                            <tr>
                                                <th  style="text-align:center"><input class="form-check-input" type="checkbox"  id="email-checkbox" name="email"></th>
                                                <td><label class="form-check-label" for="email-checkbox">E-mail</label></td>
                                                <td><input type="text" value="<?php echo $_SESSION['mail']; ?>" readonly id="dealer-email-checkbox" name="dealer_email" style="display:none"><?php echo $_SESSION['mail']; ?></td>
                                            </tr>
                                            <tr>
                                                <th style="text-align:center"><input class="form-check-input" type="checkbox" value="" id="telegram-checkbox" name="telegram"></th>
                                                <td><label class="form-check-label" for="telegram-checkbox">StekoBot(Telegram)</label></td>
                                                <td>Ваш номер</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button class="btn btn-success" form="alertSettings" type="submit">Отправить</button>  
                            </form>
                            </div>
                        </div>
                    </div>    
                    <script>
                      alertSettings.addEventListener("submit", event => {
                        event.preventDefault();
                        const data = [...document.querySelectorAll("input[id$='checkbox']")].reduce((obj, curInput) => {
                            obj[curInput.name] = curInput.type === "checkbox" ? curInput.checked : curInput.value;
                            return obj
                        }, {}); 
                        $.ajax({
                            url: "http://localhost/",
                            method: 'POST',
                            data: data,
                            dataType: "json"
                        })
                    })
                    </script>
<!--  Блок настройки уведомлений   end  --> 