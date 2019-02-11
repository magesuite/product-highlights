Block for Product Highlights
============================
Usage
-----
By default, block uses product's `short_description` attribute. So basic usage will look  like that:
```
<block class="MageSuite\ProductHighlights\Block\Highlights" name="product.info.highlights"/>
```
You can also specify template which will be used to show highlights:
```
<block class="MageSuite\ProductHighlights\Block\Highlights" name="product.info.highlights" template="YourVendorName_YourModule:your_template.phtml/>
```
But if you want to change default attribute which will be used, you can add additional argument.
With one attribute:
```
<block class="MageSuite\ProductHighlights\Block\Highlights" name="product.info.highlights">
   <arguments>
       <argument name="attributes_list" xsi:type="string">description</argument>
   </arguments>
</block>
```
Or with set of attributes:
```
<block class="MageSuite\ProductHighlights\Block\Highlights" name="product.info.highlights">
   <arguments>
       <argument name="attributes_list" xsi:type="array">
           <item name="short_description" xsi:type="string">short_description</item>
           <item name="description" xsi:type="string">description</item>
       </argument>
   </arguments>
</block>
```