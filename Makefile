plugin = Moon

all:
	@ echo "Build archive for plugin ${plugin}"
	@ git archive HEAD --prefix=${plugin}/ --format=zip -o ${plugin}.zip