from PIL import Image

background = Image.open("/home/ankitha/cns/project/out1.png")
overlay = Image.open("/home/ankitha/cns/project/out2.png")

background = background.convert("RGBA")
overlay = overlay.convert("RGBA")

new_img = Image.blend(background, overlay, 0.5)
new_img.save("/home/ankitha/cns/project/new.png","PNG")
