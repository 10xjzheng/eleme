<?php

/**
 * 饿了么手气红包
 * Class Eleme
 * @author 10xjzheng
 */
class Eleme
{
    /**
     * 域名
     */
    const ORIGIN = 'https://h5.ele.me';

    /**
     * 用来抢红包的cookie
     * @var array
     */
    static $cookies = [
        'ubt_ssid=egw2ruzkki8qiut6ypy93r9difyzjcir_2018-02-04; _utrace=69edb1440f770834a2265890f94a38c6_2018-02-04; snsInfo[101204453]=%7B%22city%22%3A%22%E8%B5%A3%E5%B7%9E%22%2C%22eleme_key%22%3A%229a2e74c50f96438cb8c123a0ecb39fa8%22%2C%22figureurl%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F101204453%2F3DD28AD69CEF89D0B60F013CBB652031%2F30%22%2C%22figureurl_1%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F101204453%2F3DD28AD69CEF89D0B60F013CBB652031%2F50%22%2C%22figureurl_2%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F101204453%2F3DD28AD69CEF89D0B60F013CBB652031%2F100%22%2C%22figureurl_qq_1%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F101204453%2F3DD28AD69CEF89D0B60F013CBB652031%2F40%22%2C%22figureurl_qq_2%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F101204453%2F3DD28AD69CEF89D0B60F013CBB652031%2F100%22%2C%22gender%22%3A%22%E7%94%B7%22%2C%22is_lost%22%3A0%2C%22is_yellow_vip%22%3A%220%22%2C%22is_yellow_year_vip%22%3A%220%22%2C%22level%22%3A%220%22%2C%22msg%22%3A%22%22%2C%22nickname%22%3A%22%E3%80%80%22%2C%22openid%22%3A%223DD28AD69CEF89D0B60F013CBB652031%22%2C%22province%22%3A%22%E6%B1%9F%E8%A5%BF%22%2C%22ret%22%3A0%2C%22vip%22%3A%220%22%2C%22year%22%3A%221993%22%2C%22yellow_vip_level%22%3A%220%22%2C%22name%22%3A%22%E3%80%80%22%2C%22avatar%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F101204453%2F3DD28AD69CEF89D0B60F013CBB652031%2F40%22%7D',
        'ubt_ssid=m5p86qjtb95kll3pil21jhtmh58kdy5e_2018-02-04; _utrace=bc416af5861c5ba07f6c9d42ecf57375_2018-02-04; snsInfo[101204453]=%7B%22city%22%3A%22%22%2C%22eleme_key%22%3A%22b3bd1d2845bca419cda6a5261004cbf9%22%2C%22figureurl%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F101204453%2F5FAA737C565A8D7FBB25643EE2719E14%2F30%22%2C%22figureurl_1%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F101204453%2F5FAA737C565A8D7FBB25643EE2719E14%2F50%22%2C%22figureurl_2%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F101204453%2F5FAA737C565A8D7FBB25643EE2719E14%2F100%22%2C%22figureurl_qq_1%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F101204453%2F5FAA737C565A8D7FBB25643EE2719E14%2F40%22%2C%22figureurl_qq_2%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F101204453%2F5FAA737C565A8D7FBB25643EE2719E14%2F100%22%2C%22gender%22%3A%22%E7%94%B7%22%2C%22is_lost%22%3A0%2C%22is_yellow_vip%22%3A%220%22%2C%22is_yellow_year_vip%22%3A%220%22%2C%22level%22%3A%220%22%2C%22msg%22%3A%22%22%2C%22nickname%22%3A%22q0%22%2C%22openid%22%3A%225FAA737C565A8D7FBB25643EE2719E14%22%2C%22province%22%3A%22%22%2C%22ret%22%3A0%2C%22vip%22%3A%220%22%2C%22year%22%3A%220%22%2C%22yellow_vip_level%22%3A%220%22%2C%22name%22%3A%22q0%22%2C%22avatar%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F101204453%2F5FAA737C565A8D7FBB25643EE2719E14%2F40%22%7D',
        'ubt_ssid=0f2pyn9g7vm3wvbv3cclxawm72jp5e0n_2018-02-04; _utrace=5d15ba588f846b9eb3fb7ae8c784d441_2018-02-04; snsInfo[101204453]=%7B%22city%22%3A%22%E6%B7%B1%E5%9C%B3%22%2C%22eleme_key%22%3A%22453f4592ac4f530ae7cece0809a3e028%22%2C%22figureurl%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F111111%2F942FEA70050EEAFBD4DCE2C1FC775E56%2F30%22%2C%22figureurl_1%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F111111%2F942FEA70050EEAFBD4DCE2C1FC775E56%2F50%22%2C%22figureurl_2%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F111111%2F942FEA70050EEAFBD4DCE2C1FC775E56%2F100%22%2C%22figureurl_qq_1%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F111111%2F942FEA70050EEAFBD4DCE2C1FC775E56%2F40%22%2C%22figureurl_qq_2%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F111111%2F942FEA70050EEAFBD4DCE2C1FC775E56%2F100%22%2C%22gender%22%3A%22%E7%94%B7%22%2C%22is_lost%22%3A0%2C%22is_yellow_vip%22%3A%220%22%2C%22is_yellow_year_vip%22%3A%220%22%2C%22level%22%3A%220%22%2C%22msg%22%3A%22%22%2C%22nickname%22%3A%22qzuser%22%2C%22openid%22%3A%22184AAE14458AD189528D3668A1C6F296%22%2C%22province%22%3A%22%E5%B9%BF%E4%B8%9C%22%2C%22ret%22%3A0%2C%22vip%22%3A%220%22%2C%22year%22%3A%221990%22%2C%22yellow_vip_level%22%3A%220%22%2C%22name%22%3A%22qzuser%22%2C%22avatar%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F111111%2F942FEA70050EEAFBD4DCE2C1FC775E56%2F40%22%7D',
        'ubt_ssid=w7l33l0lf60k48kac3fwk7nrgpbxalz8_2018-02-04; _utrace=a406144164e430f199f20c4be85bda0b_2018-02-04; snsInfo[101204453]=%7B%22city%22%3A%22%22%2C%22eleme_key%22%3A%22f863270206f63d6e73971b71018e0459%22%2C%22figureurl%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F101204453%2F3722C12B44DEB8D0CE788AC294BA16A3%2F30%22%2C%22figureurl_1%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F101204453%2F3722C12B44DEB8D0CE788AC294BA16A3%2F50%22%2C%22figureurl_2%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F101204453%2F3722C12B44DEB8D0CE788AC294BA16A3%2F100%22%2C%22figureurl_qq_1%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F101204453%2F3722C12B44DEB8D0CE788AC294BA16A3%2F40%22%2C%22figureurl_qq_2%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F101204453%2F3722C12B44DEB8D0CE788AC294BA16A3%2F100%22%2C%22gender%22%3A%22%E7%94%B7%22%2C%22is_lost%22%3A0%2C%22is_yellow_vip%22%3A%220%22%2C%22is_yellow_year_vip%22%3A%220%22%2C%22level%22%3A%220%22%2C%22msg%22%3A%22%22%2C%22nickname%22%3A%22q2%22%2C%22openid%22%3A%223722C12B44DEB8D0CE788AC294BA16A3%22%2C%22province%22%3A%22%22%2C%22ret%22%3A0%2C%22vip%22%3A%220%22%2C%22year%22%3A%220%22%2C%22yellow_vip_level%22%3A%220%22%2C%22name%22%3A%22q2%22%2C%22avatar%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F101204453%2F3722C12B44DEB8D0CE788AC294BA16A3%2F40%22%7D',
        'ubt_ssid=z3ndbh0669b1ams0dmp1lnuxt3m21wwz_2018-02-04; _utrace=9449a95ee053439333e1715393182c76_2018-02-04; snsInfo[101204453]=%7B%22city%22%3A%22%E6%B7%B1%E5%9C%B3%22%2C%22eleme_key%22%3A%22b3f3d92e59fb65a08c907e79cf9c1d29%22%2C%22figureurl%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F111111%2F942FEA70050EEAFBD4DCE2C1FC775E56%2F30%22%2C%22figureurl_1%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F111111%2F942FEA70050EEAFBD4DCE2C1FC775E56%2F50%22%2C%22figureurl_2%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F111111%2F942FEA70050EEAFBD4DCE2C1FC775E56%2F100%22%2C%22figureurl_qq_1%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F111111%2F942FEA70050EEAFBD4DCE2C1FC775E56%2F40%22%2C%22figureurl_qq_2%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F111111%2F942FEA70050EEAFBD4DCE2C1FC775E56%2F100%22%2C%22gender%22%3A%22%E7%94%B7%22%2C%22is_lost%22%3A0%2C%22is_yellow_vip%22%3A%220%22%2C%22is_yellow_year_vip%22%3A%220%22%2C%22level%22%3A%220%22%2C%22msg%22%3A%22%22%2C%22nickname%22%3A%22qzuser%22%2C%22openid%22%3A%22A5AF968E88ACE852BE1BC7D86F775112%22%2C%22province%22%3A%22%E5%B9%BF%E4%B8%9C%22%2C%22ret%22%3A0%2C%22vip%22%3A%220%22%2C%22year%22%3A%221990%22%2C%22yellow_vip_level%22%3A%220%22%2C%22name%22%3A%22qzuser%22%2C%22avatar%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F111111%2F942FEA70050EEAFBD4DCE2C1FC775E56%2F40%22%7D',
        'ubt_ssid=ehgosb9alx3k5kqa0rzs3r4d0gvcbwof_2018-02-04; _utrace=6250e98971a6f88526bd9fb4ca0093ba_2018-02-04; snsInfo[101204453]=%7B%22city%22%3A%22%22%2C%22eleme_key%22%3A%22f01f8b87d323822768f4623abc7ef914%22%2C%22figureurl%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F101204453%2FC7AB6BF8DA5C64E20C26AB93DAF1EEC8%2F30%22%2C%22figureurl_1%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F101204453%2FC7AB6BF8DA5C64E20C26AB93DAF1EEC8%2F50%22%2C%22figureurl_2%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F101204453%2FC7AB6BF8DA5C64E20C26AB93DAF1EEC8%2F100%22%2C%22figureurl_qq_1%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F101204453%2FC7AB6BF8DA5C64E20C26AB93DAF1EEC8%2F40%22%2C%22figureurl_qq_2%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F101204453%2FC7AB6BF8DA5C64E20C26AB93DAF1EEC8%2F100%22%2C%22gender%22%3A%22%E7%94%B7%22%2C%22is_lost%22%3A0%2C%22is_yellow_vip%22%3A%220%22%2C%22is_yellow_year_vip%22%3A%220%22%2C%22level%22%3A%220%22%2C%22msg%22%3A%22%22%2C%22nickname%22%3A%22q4%22%2C%22openid%22%3A%22C7AB6BF8DA5C64E20C26AB93DAF1EEC8%22%2C%22province%22%3A%22%22%2C%22ret%22%3A0%2C%22vip%22%3A%220%22%2C%22year%22%3A%220%22%2C%22yellow_vip_level%22%3A%220%22%2C%22name%22%3A%22q4%22%2C%22avatar%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F101204453%2FC7AB6BF8DA5C64E20C26AB93DAF1EEC8%2F40%22%7D',
        'ubt_ssid=v6tia4871j20blgm58ey7i6cp8x6od17_2018-02-04; _utrace=3ed0ebc900e0f90351b12ac8edf1b747_2018-02-04; snsInfo[101204453]=%7B%22city%22%3A%22%E6%B7%B1%E5%9C%B3%22%2C%22eleme_key%22%3A%2285e582983992b2ffc63cac1cc3345e73%22%2C%22figureurl%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F111111%2F942FEA70050EEAFBD4DCE2C1FC775E56%2F30%22%2C%22figureurl_1%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F111111%2F942FEA70050EEAFBD4DCE2C1FC775E56%2F50%22%2C%22figureurl_2%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F111111%2F942FEA70050EEAFBD4DCE2C1FC775E56%2F100%22%2C%22figureurl_qq_1%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F111111%2F942FEA70050EEAFBD4DCE2C1FC775E56%2F40%22%2C%22figureurl_qq_2%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F111111%2F942FEA70050EEAFBD4DCE2C1FC775E56%2F100%22%2C%22gender%22%3A%22%E7%94%B7%22%2C%22is_lost%22%3A0%2C%22is_yellow_vip%22%3A%220%22%2C%22is_yellow_year_vip%22%3A%220%22%2C%22level%22%3A%220%22%2C%22msg%22%3A%22%22%2C%22nickname%22%3A%22qzuser%22%2C%22openid%22%3A%22C1EC255A92EBB13CB489933256B8F125%22%2C%22province%22%3A%22%E5%B9%BF%E4%B8%9C%22%2C%22ret%22%3A0%2C%22vip%22%3A%220%22%2C%22year%22%3A%221990%22%2C%22yellow_vip_level%22%3A%220%22%2C%22name%22%3A%22qzuser%22%2C%22avatar%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F111111%2F942FEA70050EEAFBD4DCE2C1FC775E56%2F40%22%7D',
        'ubt_ssid=qyhf4a10bvfamnwmyxa4qa3av74ucwa0_2018-02-04; _utrace=8291060d9c8335bf52762d4177df9bd0_2018-02-04; snsInfo[101204453]=%7B%22city%22%3A%22%22%2C%22eleme_key%22%3A%220cd8c32ad6b93963bb9e5dcc3bfa48fb%22%2C%22figureurl%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F101204453%2FD3728F828CAD7FB726386915E78CDD9C%2F30%22%2C%22figureurl_1%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F101204453%2FD3728F828CAD7FB726386915E78CDD9C%2F50%22%2C%22figureurl_2%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F101204453%2FD3728F828CAD7FB726386915E78CDD9C%2F100%22%2C%22figureurl_qq_1%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F101204453%2FD3728F828CAD7FB726386915E78CDD9C%2F40%22%2C%22figureurl_qq_2%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F101204453%2FD3728F828CAD7FB726386915E78CDD9C%2F100%22%2C%22gender%22%3A%22%E7%94%B7%22%2C%22is_lost%22%3A0%2C%22is_yellow_vip%22%3A%220%22%2C%22is_yellow_year_vip%22%3A%220%22%2C%22level%22%3A%220%22%2C%22msg%22%3A%22%22%2C%22nickname%22%3A%22q6%22%2C%22openid%22%3A%22D3728F828CAD7FB726386915E78CDD9C%22%2C%22province%22%3A%22%22%2C%22ret%22%3A0%2C%22vip%22%3A%220%22%2C%22year%22%3A%220%22%2C%22yellow_vip_level%22%3A%220%22%2C%22name%22%3A%22q6%22%2C%22avatar%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F101204453%2FD3728F828CAD7FB726386915E78CDD9C%2F40%22%7D',
        'ubt_ssid=t4kgl4ywhgepybxaz8zw2nblt3vk1rn1_2018-02-04; _utrace=6dd4a0a476869b5280e18afa689dfd69_2018-02-04; snsInfo[101204453]=%7B%22city%22%3A%22%E6%B7%B1%E5%9C%B3%22%2C%22eleme_key%22%3A%226a1c7c8a16e114e54d648ba39dda4be2%22%2C%22figureurl%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F111111%2F942FEA70050EEAFBD4DCE2C1FC775E56%2F30%22%2C%22figureurl_1%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F111111%2F942FEA70050EEAFBD4DCE2C1FC775E56%2F50%22%2C%22figureurl_2%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F111111%2F942FEA70050EEAFBD4DCE2C1FC775E56%2F100%22%2C%22figureurl_qq_1%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F111111%2F942FEA70050EEAFBD4DCE2C1FC775E56%2F40%22%2C%22figureurl_qq_2%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F111111%2F942FEA70050EEAFBD4DCE2C1FC775E56%2F100%22%2C%22gender%22%3A%22%E7%94%B7%22%2C%22is_lost%22%3A0%2C%22is_yellow_vip%22%3A%220%22%2C%22is_yellow_year_vip%22%3A%220%22%2C%22level%22%3A%220%22%2C%22msg%22%3A%22%22%2C%22nickname%22%3A%22qzuser%22%2C%22openid%22%3A%22FAE707F7F4575C0401BFB7C3D4550A63%22%2C%22province%22%3A%22%E5%B9%BF%E4%B8%9C%22%2C%22ret%22%3A0%2C%22vip%22%3A%220%22%2C%22year%22%3A%221990%22%2C%22yellow_vip_level%22%3A%220%22%2C%22name%22%3A%22qzuser%22%2C%22avatar%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F111111%2F942FEA70050EEAFBD4DCE2C1FC775E56%2F40%22%7D',
        'ubt_ssid=fwonx2m8q2tbm9vwxhyh9eyxt7gfmj6b_2018-02-04; _utrace=0d953ef0cf7674dea0d92c47256387c3_2018-02-04; snsInfo[101204453]=%7B%22city%22%3A%22%22%2C%22eleme_key%22%3A%22056e3656f3eb631225fadcfb8771efa8%22%2C%22figureurl%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F101204453%2F26689B4FA073BF48F0FE585296303EFA%2F30%22%2C%22figureurl_1%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F101204453%2F26689B4FA073BF48F0FE585296303EFA%2F50%22%2C%22figureurl_2%22%3A%22http%3A%2F%2Fqzapp.qlogo.cn%2Fqzapp%2F101204453%2F26689B4FA073BF48F0FE585296303EFA%2F100%22%2C%22figureurl_qq_1%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F101204453%2F26689B4FA073BF48F0FE585296303EFA%2F40%22%2C%22figureurl_qq_2%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F101204453%2F26689B4FA073BF48F0FE585296303EFA%2F100%22%2C%22gender%22%3A%22%E7%94%B7%22%2C%22is_lost%22%3A0%2C%22is_yellow_vip%22%3A%220%22%2C%22is_yellow_year_vip%22%3A%220%22%2C%22level%22%3A%220%22%2C%22msg%22%3A%22%22%2C%22nickname%22%3A%22q8%22%2C%22openid%22%3A%2226689B4FA073BF48F0FE585296303EFA%22%2C%22province%22%3A%22%22%2C%22ret%22%3A0%2C%22vip%22%3A%220%22%2C%22year%22%3A%220%22%2C%22yellow_vip_level%22%3A%220%22%2C%22name%22%3A%22q8%22%2C%22avatar%22%3A%22http%3A%2F%2Fq.qlogo.cn%2Fqqapp%2F101204453%2F26689B4FA073BF48F0FE585296303EFA%2F40%22%7D'
    ];

    /**
     * 获取手气红包
     * @param string $url 红包链接
     * @param string $mobile 手机号码
     * @return array
     */
    public function getLuckyOne($url, $mobile)
    {
        parse_str($url, $urlParams); //url参数解析
        $res = [];
        try {
            if(empty($mobile) || !preg_match('#^1[\d]{10}$#', $mobile)) {
                throw new \Exception('请填写正确的手机号码');
            }
            if(empty($url)) {
                throw new \Exception('请填写红包链接');
            }
            if(empty($urlParams['sn']) || empty($urlParams['lucky_number'])) {
                throw new \Exception('领取饿了么红包链接不正确');
            }
            $leftNumber = $urlParams['lucky_number'];
            $index = 0;
            while ($leftNumber) {
                $phone = empty($phone) ? '138' . rand(10000000, 99999999) : $phone;//构造假的手机号码
                $result = $this->receive(self::$cookies[$index], $urlParams, $phone);
                if(empty($result['promotion_records'])) {
                    throw new \Exception('errors' . print_r($result, true));
                }
                $leftNumber = $urlParams['lucky_number'] - count($result['promotion_records']);
                $index++;
                $index = $index > 9 ? 0 : $index;
                if($leftNumber <= 0) {
                    $luckyOne = $result['promotion_records'][$urlParams['lucky_number']-1];
                    $res = ['status' => 0, 'message' => '最佳手气: ' . $luckyOne['sns_username'] . "\n红包金额: " . $luckyOne['amount']];
                    break;
                } else if($leftNumber === 1) {
                    $phone = $mobile;
                } else {
                    unset($phone);
                }
            }
        } catch(\Exception $e) {
            $res = ['status' => 0, 'message' => $e->getMessage()];
        }
        return $res;
    }


    /**
     * 模拟抢红包
     * @param string $cookie cookie
     * @param array $urlParams 红包链接的参数列表
     * @param string $phone 手机号码
     * @return mixed
     * @throws Exception
     */
    public function receive($cookie, $urlParams, $phone)
    {
        //从cookie里面解析饿了么用户信息
        $str = urldecode($cookie);
        $matches = explode('=', $str);
        if(empty($matches[3])) {
            throw new \Exception('cookie error');
        }
        $sns = json_decode($matches[3], true); //返回饿了么用户信息

        //绑定手机号码
        $params = ['sign' => $sns['eleme_key'], 'phone' => $phone];
        $this->createRequest("/restapi/v1/weixin/{$sns['openid']}/phone", $params);

        //领取红包并返回手气红包的信息
        $params = [
            'device_id' => '',
            'group_sn' => $urlParams['sn'],
            'hardware_id' => '',
            'method' => 'phone',
            'phone' => $phone,
            'platform' => $urlParams['platform'],
            'sign' => $sns['eleme_key'],
            'track_id' => '',
            'unionid' => 'fuck',
            'weixin_avatar' => '',
            'weixin_username' => ''
        ];
        $result = $this->createRequest("/restapi/marketing/promotion/weixin/{$sns['openid']}", $params, 'post');
        if(!$result) {
            throw new \Exception('领取饿了么红包失败');
        }
        return $result;
    }

    /**
     * 创建请求
     * @param string $url
     * @param string $data
     * @param string $type
     * @return mixed
     * @throws \Exception
     */
    public function createRequest($url, $data, $type = 'put')
    {
        $url = self::ORIGIN . $url;
        //设置http头信息
        $headers = [];
        $headers[] = 'Origin:' . self::ORIGIN;
        $headers[] = 'Referer:' . self::ORIGIN . '/hongbao/';
        $headers[] = 'User-Agent:Mozilla/5.0 (Linux; Android 6.0; PRO 6 Build/MRA58K; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/53.0.2785.49 Mobile MQQBrowser/6.2 TBS/043221 Safari/537.36 V1_AND_SQ_7.0.0_676_YYB_D QQ/7.0.0.3135 NetType/WIFI WebP/0.3.0 Pixel/1080';
        $headers[] = "Content-Type:application/json;charset=utf-8";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, trim($url));
        curl_setopt ($ch, CURLOPT_CAINFO, "./ssl.txt");//https需要证书
        curl_setopt($ch, CURLOPT_HEADER, 0);//设置header
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        if($type == 'post') {
            curl_setopt($ch, CURLOPT_POST, 1);//post提交方式
        }
        if($type == 'put') {
            curl_setopt($ch, CURLOPT_POST, 0);//post提交方式
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        }
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $errors = curl_error($ch);
        if($errors) {
            throw new \Exception('errors' . print_r(curl_error($ch), true)) ;
        }
        return json_decode(curl_exec($ch), true);
    }
}
