<?php /* Smarty version 2.6.27, created on 2017-10-02 22:07:24
         compiled from /opt/bitnami/apache2/htdocs/nakakura/eccube2/html/../data/Smarty/templates/default/entry/kiyaku.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/opt/bitnami/apache2/htdocs/nakakura/eccube2/html/../data/Smarty/templates/default/entry/kiyaku.tpl', 25, false),array('modifier', 'h', '/opt/bitnami/apache2/htdocs/nakakura/eccube2/html/../data/Smarty/templates/default/entry/kiyaku.tpl', 25, false),)), $this); ?>

<div id="undercolumn">
    <div id="undercolumn_entry">
        <h2 class="title"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</h2>
        <p class="message">【重要】 会員登録をされる前に、下記ご利用規約をよくお読みください。</p>
        <p>規約には、本サービスを使用するに当たってのあなたの権利と義務が規定されております。<br />
            「同意して会員登録へ」ボタンをクリックすると、あなたが本規約の全ての条件に同意したことになります。
        </p>

        <form name="form1" id="form1" method="post" action="?">
            <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
            <textarea name="textfield" class="kiyaku_text" cols="80" rows="30" readonly="readonly"><?php echo "\n"; ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_kiyaku_text'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('h', true, $_tmp) : smarty_modifier_h($_tmp)); ?>
</textarea>

            <div class="btn_area">
                <ul>
                    <li>
                        <a href="<?php echo ((is_array($_tmp=@TOP_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">
                            <img class="hover_change_image" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_entry_cannot.jpg" alt="同意しない" />
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo ((is_array($_tmp=@ENTRY_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">
                            <img class="hover_change_image" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/button/btn_entry_agree.jpg" alt="同意して会員登録へ" />
                        </a>
                    </li>
                </ul>
            </div>

        </form>
    </div>
</div>